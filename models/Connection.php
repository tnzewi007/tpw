<?php
// namespace Models;

   class Connection
   {

	private $serverName= 'localhost';
	private $username='root';
	private $pass='';
	public $connect;
	protected $dbName = "tpw";

	// private $queue = array();
	// private $count = 0;

	private static $_instance = null;

	private function __construct()
	{		
		self::$_instance = new \mysqli($this->serverName, $this->username, $this->pass, $this->dbName);
	}
	
	protected function getConnection(){

		if(is_null(self::$_instance))
		{
			new Connection();
		}

		return self::$_instance;
	}
} 
?>