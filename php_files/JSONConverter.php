<?php
class JSONConverter {
	
	public function __construct() {}
	
		function recordSetToJson($mysql_result) {
		$rs = array();
		while($rs[] = mysql_fetch_assoc($mysql_result)) {
			// you don´t really need to do anything here.
		}
		return json_encode($rs);
	}
	
	function __destruct() {}
}
?>