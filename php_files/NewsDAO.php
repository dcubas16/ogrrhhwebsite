<?php
include 'ConnectionManager.php';
class NewsDAO {
	
	public function __construct() {}
	
	public function selectLegislationByDate($date) {
	
		$query = 	"SELECT l.*, lt.name, YEAR(l.publication_date) AS publication_year 
					FROM ogrrhhwebsitedb.legislations l
					INNER JOIN ogrrhhwebsitedb.legislation_types lt on l.legislation_type_id = lt.id
					WHERE l.update_date = str_to_date('".$date."','%d/%m/%Y')
					ORDER BY l.update_date ASC;";
		// 		echo $query;
		$connectionManager = new ConnectionManager ();
		$result = $connectionManager->doQuery ( $query );
		$connectionManager->closeConnection ();
		return $result;
	}
	
	public function selectConvocatoryByDate($date) {
	
		$query = 	"SELECT c.*, ct.name AS convocatory_type_name
					FROM ogrrhhwebsitedb.convocatories c
					INNER JOIN ogrrhhwebsitedb.convocatory_types ct on c.convocatory_type_id = ct.id
					WHERE c.update_date = str_to_date('".$date."','%d/%m/%Y')
					ORDER BY c.update_date ASC;";
		// 		echo $query;
		$connectionManager = new ConnectionManager ();
		$result = $connectionManager->doQuery ( $query );
		$connectionManager->closeConnection ();
		return $result;
	}
	
	
	public function getLastUpdateDate() {
	
		$query = 	"SELECT DATE_FORMAT(MAX(t1.max_update_date),'%d/%m/%Y') as max_update_date FROM (
					SELECT max(l.update_date) max_update_date FROM ogrrhhwebsitedb.legislations l
					UNION
					SELECT max(c.update_date) max_update_date FROM ogrrhhwebsitedb.convocatories c
					) t1;";
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