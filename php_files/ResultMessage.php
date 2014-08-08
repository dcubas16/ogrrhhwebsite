<?php
class ResultMessage{

	public $type;// Error=0 ; Exito=1;
	public $message;
	

	public function __construct($type, $message){
		$this->type = $type;
		$this->message = $message;
	}
}

?>