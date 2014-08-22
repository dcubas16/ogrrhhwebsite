<?php
class JSONConverter {
	
	public function __construct() {
	}
	
	function recordSetToJson($mysql_result) {
		if(mysql_num_rows($mysql_result) > 0){
			$rs = array ();
			while ( $rs [] = mysql_fetch_assoc ( $mysql_result ) ) {
				// you don´t really need to do anything here.
			}
			$arrayLastIndex = count($rs);
			unset($rs[$arrayLastIndex-1]);
			return json_encode ( $rs );
		}else {
			return "null";
		}
	}
	
	function __destruct() {
	}
}
?>