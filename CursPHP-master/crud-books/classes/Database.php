<?php
 
class Database{
	
	private $connection;
	private static $instance = null;
 
	
	private $_host = 'localhost';
    private $_username = 'root';
    private $_password = '';
    private $_database = 'biblioteca';
 
	private function __construct()
	{
		$this->connection = mysqli_connect($this->_host, $this->_username, $this->_password, $this->_database);
		if(mysqli_connect_error()){
			die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
		}
	}
	public static function getInstance()
	{
	  if(!self::$instance)
	  {
		self::$instance = new Database();
	  }
	 
	  return self::$instance;
	}
	
	public function getConnection()
	{
		return $this->connection;
	}

	public function sanitize($var){
		$return = mysqli_real_escape_string($this->connection, $var);
		return $return;
	}
}


?>