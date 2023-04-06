<?php
class Database {
    private static $instance;
    private $conn;
    
    private function __construct() {
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "news_app";
        
        $this->conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
        
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function getConnection() {
        return $this->conn;
    }
    
    public function __destruct() {
        $this->conn->close();
    }
}
?>
