<?php

class User {

    const TABLENAME = 'users';

    public $username;
    public $email;
    public $password;
    public $status;

    public function __construct() {

    }

    
    /**
     * Get the value of username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     */
    public function setUsername($username)
    {
        $this->username = $username;

    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email)
    {
        $this->email = $email;

    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password)
    {
        $this->password = $password;

    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     */
    public function setStatus($status)
    {
        $this->status = $status;

    }

    public function register($username, $email, $password)
    {
        $this->setUsername($username);
        $this->setEmail($email);
        $this->setPassword($password);

        $sql = "SELECT id FROM users WHERE username='$this->username' LIMIT 1";
        $conn = Database::getInstance()->getConnection();
        $check = mysqli_query($conn, $sql);
        $count_row = mysqli_num_rows($check);

        // If the username is not in db, insert to the table
        if ($count_row == 0) {
            $sql_ins = "INSERT INTO users SET
            username='$this->username',
            email='$this->email',
            password='$this->password'";
            $res = mysqli_query($conn, $sql_ins);
            if ($res) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }

    }


    public function login($umail, $upass)
    {

        $sql = "SELECT * FROM users WHERE email= '" . $umail. "' LIMIT 1";
        $conn = Database::getInstance()->getConnection();
        $res = mysqli_query($conn, $sql);
        $count_row = mysqli_num_rows($res);
        if ($count_row == 1) {
            $row = mysqli_fetch_assoc($res);
            if (password_verify($upass, $row['password'])) {
                $_SESSION['user_session'] = $row['id'];
                return true;
            } else {
                return false;
            }
        }

    }

    public static function is_loggedin()
    {
        if (isset($_SESSION['user_session'])) {
            return true;
        }
    }

    public static function redirect($url)
    {
        header("Location: $url");
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
    }

}