<?php
include 'ConnectionManager.php';

class LegislationTypeDAO {
	public $id;
	public $name;
	
	public function __construct() {
		
	}
	
	public function setProperties($id, $name) {
		$this->id = $id;
		$this->name = $name;
	}
	
	public function getLegislationTypes() {
	
		$query = 	"SELECT * FROM legislation_types";
		// 		echo $query;
		$connectionManager = new ConnectionManager ();
		$result = $connectionManager->doQuery ( $query );
		$connectionManager->closeConnection ();
		return $result;
	}

	function __destruct() {
		
	}
}
?>