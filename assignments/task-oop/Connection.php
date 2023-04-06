<?php
 
class Connection{
	
	private $connection;
	private static $instance = null;
 
	
	private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'user';
	private $port = "3306";
 
	private function __construct()
	{
		$this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->database, $this->port);
		if(mysqli_connect_error()){
			die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
		}
	}
	public static function getInstance()
	{
	  if(!self::$instance)
	  {
		self::$instance = new Connection();
	  }
	 
	  return self::$instance;
	}
	
	public function getConnection()
	{
		return $this->connection;
	}

}


?>