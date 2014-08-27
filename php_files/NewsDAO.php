<?php
include 'ConnectionManager.php';
class NewsDAO {
	
	public function __construct() {}
	
	public function selectLegislationByDate($date) {
	
		$query = 	"SELECT l.*, lt.name as legislation_type_name, YEAR(l.publication_date) AS publication_year 
					FROM legislations l
					INNER JOIN legislation_types lt on l.legislation_type_id = lt.id
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
					FROM convocatories c
					INNER JOIN convocatory_types ct on c.convocatory_type_id = ct.id
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
					SELECT max(l.update_date) max_update_date FROM legislations l
					UNION
					SELECT max(c.update_date) max_update_date FROM convocatories c
					) t1;";
		// 		echo $query;
		$connectionManager = new ConnectionManager ();
		$result = $connectionManager->doQuery ( $query );
		$connectionManager->closeConnection ();
		return $result;
	}
	
	public function getLastThreeNews() {
	
		$query = 	"SELECT IF(CHAR_LENGTH(title) > 50, CONCAT(LEFT(title,50), '...'), title) as title, title as complete_title, updated_date, file_path FROM (
					SELECT name as title, DATE_FORMAT(update_date,'%m/%d/%Y') AS updated_date, file_path FROM legislations
					union
					SELECT title, DATE_FORMAT(update_date,'%m/%d/%Y') AS updated_date, file_path FROM convocatories
					) T1 
					order by T1.updated_date desc
					limit 3;";
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