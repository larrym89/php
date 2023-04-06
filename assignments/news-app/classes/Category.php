<?php
require_once(dirname(__FILE__) . '/../includes/database.php');

class Category {
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
    
    public function getAllCategories() {
        $sql = "SELECT * FROM categories ORDER BY name ASC";
        $result = $this->conn->query($sql);
        $categories = array();
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $categories[] = $row;
            }
        }
        
        return $categories;
    }
    
    public function getCategoryById($id) {
        $sql = "SELECT * FROM categories WHERE id = " . $id;
        $result = $this->conn->query($sql);
        $category = null;
        
        if ($result->num_rows > 0) {
            $category = $result->fetch_assoc();
        }
        
        return $category;
    }
}



?>

