<?php
include 'ConnectionManager.php';
class ConvocatoryDAO {
	public $id;
	public $convocatory_type_id;
	public $dependency_id;
	public $number;
	public $title;
	public $life_date;
	public $file_path;
	public $user_id;
	public $office_id;
	public $update_date;
	public function __construct() {
	}
	public function setProperties($convocatory_type_id, $dependency_id, $number, $title, $life_date, $file_path, $user_id, $office_id, $update_date) {
		$this->convocatory_type_id = $convocatory_type_id;
		$this->dependency_id = $dependency_id;
		$this->number = $number;
		$this->title = $title;
		$this->life_date = $life_date;
		$this->file_path = $file_path;
		$this->user_id = $user_id;
		$this->office_id = $office_id;
		$this->update_date = $update_date;
	}
	public function insert() {
		$query = "INSERT INTO convocatories(convocatory_type_id,dependency_id,number,title,life_date,file_path,user_id,office_id,
				update_date)VALUES (" . $this->convocatory_type_id . "," . $this->dependency_id . "," . $this->number . ", '" . $this->title . "',str_to_date('" . $this->life_date . "', '%d/%m/%Y'), '" . $this->file_path . "' ," . $this->user_id . "," . $this->office_id . ",str_to_date('" . $this->update_date . "', '%d/%m/%Y'));";
		// echo $query;
		$connectionManager = new ConnectionManager ();
		$result = $connectionManager->doQuery ( $query );
		$connectionManager->closeConnection ();
		return $result;
	}
	public function select() {
		$query = 	"SELECT c.id, c.number, c.title, date_format(c.life_date,'%d/%m/%Y') as life_date
					, c.file_path, date_format(c.update_date,'%d/%m/%Y') as update_date
					, ct.name as convocatory_type_name, ct.id as convocatory_type_id
					FROM ogrrhhwebsitedb.convocatories c
					INNER JOIN ogrrhhwebsitedb.convocatory_types ct on c.convocatory_type_id = ct.id 
					ORDER BY c.life_date DESC";
		// echo $query;
		$connectionManager = new ConnectionManager ();
		$result = $connectionManager->doQuery ( $query );
		$connectionManager->closeConnection ();
		return $result;
	}
	
	public function selectByName($searchString) {
	
		$query = 	"SELECT c.*, ct.name
					FROM ogrrhhwebsitedb.convocatories c
					INNER JOIN ogrrhhwebsitedb.convocatory_types ct on c.convocatory_type_id = ct.id
					WHERE c.title like '%".$searchString."%'
					OR  ct.name like '%".$searchString."%'
					ORDER BY c.update_date ASC;";
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