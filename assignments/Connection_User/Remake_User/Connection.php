<?php
 
class Connection{
	
	private $connection;
	private static $instance = null;
 
	
	private $host;
    private $user;
    private $password;
    private $database;
	private $port;
 
	private function __construct($host, $user, $password, $database, $port)
	{
		$this->host = $host;
		$this->user = $user;
		$this->password = $password;
		$this->database = $database;
		$this->port = $port;

		$this->connection = mysqli_connect($this->host,$this->user,$this->password,$this->database,$this->port);
		if(mysqli_connect_error()){
			die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
		}
	}
	
	public static function getInstance($host, $user, $password, $database, $port)
	{
	  if(!self::$instance)
	  {
		self::$instance = new Connection($host, $user, $password, $database, $port);
	  }
	 
	  return self::$instance;
	}
	
	public function getConnection()
	{
		return $this->connection;
	}

}


?>