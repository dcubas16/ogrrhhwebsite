<?php
include 'ConnectionManager.php';

class LegislationDAO {
	public $legislationType;
	public $legislationName;
	public $publicationDate;
	public $fileName;
	public $userId;
	public $officeId;
	public $updateDate;
	public function __construct($legislationType, $legislationName, $publicationDate, $fileName, $userId, $officeId, $updateDate) {
		$this->legislationType = $legislationType;
		$this->legislationName = $legislationName;
		$this->publicationDate = $publicationDate;
		$this->fileName = $fileName;
		$this->userId = $userId;
		$this->officeId = $officeId;
		$this->updateDate = $updateDate;
	}
	public function insert() {
		
		$query = "INSERT INTO LEGISLATIONS(legislation_type_id,name,publication_date,pathFile,user_id,
		office_id,update_date) VALUES (" . $this->legislationType . ",'" . $this->legislationName . "',str_to_date('" . $this->publicationDate . "', '%d/%m/%Y'),'" . $this->fileName . "'," . $this->userId . "," . $this->officeId . ",str_to_date('" . $this->updateDate."', '%d/%m/%Y'))";
// 		echo $query;
		$connectionManager = new ConnectionManager ();
		$result = $connectionManager->doQuery ( $query );
		$connectionManager->closeConnection ();
		return $result;
	}
}
?>