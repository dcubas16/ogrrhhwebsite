<?php

class ConnectionManager{
	
// 	public $hostName = "localhost";
// 	public $userName = "recursoshumanos";
// 	public $password = "rec-0a9bf1";
// 	public $database = "db_recursoshumanos";
	public $hostName = "localhost";
	public $userName = "root";
	public $password = "root";
	public $database = "ogrrhhwebsitedb";
	public $connection;
	
	public function __construct(){
		$this->createConnection();
		$this->selectDatabase();
	}
	
	public function createConnection(){
		$this->connection =  mysql_connect ( $this->hostName, $this->userName, $this->password );
	}
	
	public function selectDatabase(){
		return mysql_select_db ($this->database, $this->connection );
	}
	
	public function doQuery($query){
		$result = mysql_query ( $query, $this->connection );
		return $result;
	}
	
	public function closeConnection(){
		return mysql_close ($this->connection);
	}
}

?>