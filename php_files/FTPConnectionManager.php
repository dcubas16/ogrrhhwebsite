<?php
class FTPConnectionManager{

	public $url = "ftp://ftp.ogrrhh.unmsm.edu.pe";
	public $userName = "recursoshumanos";
	public $password = "rec-9a91f8";
	public $connection;
	public $login;
	public $filePath = "";
	
	
	public function __construct(){
	}
	
	public function setFilePath($stringFilePath){
		$this->filePath = $stringFilePath;
	}
	
	public function createConnection(){
		$this->connection =  ftp_connect($this->$url);
		$this->login = ftp_login($this->connection, $this->userName, $this->password);
		if (!$this->$connection || !$this->login) { die('Connection attempt failed!'); }
	}
	
	public function uploadFile(){
		if (ftp_put($conn_id, $remote_file, $file, FTP_ASCII)) {
			echo "se ha cargado $file con éxito\n";
		} else {
			echo "Hubo un problema durante la transferencia de $file\n";
		}
	}
	
	public function closeConnection(){
		ftp_close($this->connection);
	}
}

?>