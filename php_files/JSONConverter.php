<?php
class JSONConverter {
	
	public function __construct() {
	}
	
	function recordSetToJson($mysql_result) {
		if(mysql_num_rows($mysql_result) > 0){
			$rs = array ();
			while ( $row = mysql_fetch_assoc ( $mysql_result ) ) {
				$rs[]=array_map('utf8_encode', $row);
			}
			$arrayLastIndex = count($rs);
			
			return json_encode ( $rs );
		}else {
			return "null";
		}
	}
	
	function __destruct() {
	}
}
?>