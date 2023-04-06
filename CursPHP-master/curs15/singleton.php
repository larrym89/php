<?php
// Singleton to connect db.
class ConnectDb {
  // Hold the class instance.
  private static $instance = null;
  private $conn;
  
  private $host = 'localhost';
  private $user = 'root';
  private $pass = '';
  private $name = 'biblioteca';
   
  // Constructorul este de regula private sau protected
  private function __construct()
  {
    //PHP Data Objects (PDO) este o extensie PHP ce definește o interfață ușoară, consistentă pentru accesarea bazelor de date în PHP.
    $this->conn = new PDO(
        "mysql:host={$this->host};dbname={$this->name}", $this->user,$this->pass,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
    );
  }
  
  public static function getInstance()
  {
    if(!self::$instance)
    {
      self::$instance = new ConnectDb();
    }
   
    return self::$instance;
  }
  
  public function getConnection()
  {
    return $this->conn;
  }
}

// rezultatul este : acceasi conexiune pentru toate instantele
$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();
var_dump($conn);