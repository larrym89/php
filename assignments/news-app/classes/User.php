<?php
require_once(dirname(__FILE__) . '/../includes/database.php');

class User {
    private static $instance;
    private $conn;
    
    private function __construct() {
        $this->conn = Database::getInstance()->getConnection();
    }
    
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function createUser($username, $password, $email) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, password, email) VALUES ('" . $username . "', '" . $hashedPassword . "', '" . $email . "')";
        $result = $this->conn->query($sql);
        return $result;
    }
    
    public function getUserById($id) {
        $sql = "SELECT * FROM users WHERE id = " . $id;
        $result = $this->conn->query($sql);
        $user = null;
        
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
        }
        
        return $user;
    }
    
    public function getUserByUsername($username) {
        $sql = "SELECT * FROM users WHERE username = '" . $username . "'";
        $result = $this->conn->query($sql);
        $user = null;
        
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
        }
        
        return $user;
    }
    
    public function verifyUserCredentials($username, $password) {
        $sql = "SELECT * FROM users WHERE username = '" . $username . "'";
        $result = $this->conn->query($sql);
        
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                return $user;
            }
        }
        
        return null;
    }
}
/*

In this code, the User class implements a private constructor, a private static instance variable, and a public static getInstance() method that returns the singleton instance of the User class. The createUser($username, $password, $email) method creates a new user in the database with a hashed password. The getUserById($id) method retrieves a single user from the database by their ID and returns it as an associative array. The getUserByUsername($username) method retrieves a single user from the database by their username and returns it as an associative array. The verifyUserCredentials($username, $password) method verifies a user's credentials by retrieving their hashed password from the database, comparing it to the entered password using the password_verify() function, and returning the user if the passwords match. The __construct() method uses the singleton instance of the Database class to get a mysqli connection object.

*/

?>
