<?php
include 'ConnectionManager.php';
class UserDAO {
	public $id;
	public $name;
	public $password;
	public $office_id;
	public function __construct() {
	}
	public function setProperties($id, $name, $password, $office_id) {
		$this->id = $id;
		$this->name = $name;
		$this->password = $password;
		$this->office_id = $office_id;
	}

	public function findUserLogin() {
		$query = 	"SELECT name, password
					FROM ogrrhhwebsitedb.users
					WHERE upper(trim(name)) = upper(trim('" . $this->name . "'))
					AND upper(trim(password)) = upper(trim('" . $this->password . "'));";
		// echo $query;
		$connectionManager = new ConnectionManager ();
		$result = $connectionManager->doQuery ( $query );
		$connectionManager->closeConnection ();
		return mysql_num_rows($result);;
	}
}
?>