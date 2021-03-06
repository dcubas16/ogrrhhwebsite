<?php
include 'php_files/ResultMessage.php';
include 'php_files/Constants.php';
class FTPConnectionManager {
	public $url = "ftp.ogrrhh.unmsm.edu.pe";
	public $userName = "recursoshumanos";
	public $password = "rec-9a91f8";
	public $connection;
	public $login;
	public $tempFilePath = "";
	public $fileName = "";
	public $remoteFilePath = "";
	
	public function __construct($tempFilePath, $fileName, $remoteFilePath) {
		$this->tempFilePath = $tempFilePath;
		$this->fileName = $fileName;
		$this->remoteFilePath = $remoteFilePath;
		$this->createConnection ();
	}
	public function setFilePath($stringFilePath) {
		$this->filePath = $stringFilePath;
	}
	public function createConnection() {
		$this->connection = ftp_connect ( $this->url );
		$this->login = ftp_login ( $this->connection, $this->userName, $this->password );
		if (! $this->connection || ! $this->login) {
			die ( 'Connection attempt failed!' );
		}
	}
	public function uploadFile() {
		$constant = new Constants();
// 		echo $this->remoteFilePath ."". $this->fileName ."</br>";
// 		echo $this->tempFilePath ."</br>";
		if (ftp_put ( $this->connection, $this->remoteFilePath ."". $this->fileName, $this->tempFilePath, FTP_BINARY )) {
			$this->closeConnection ();
			return new ResultMessage ( 1, "Se ha cargado con �xito el el archivo " . $this->fileName );
		} else {
			$this->closeConnection ();
			return new ResultMessage ( 0, "Hubo un problema durante la transferencia del archivo " . $this->fileName . ", vuelva a intentarlo o comuniquese con la Oficina de Modernizaci�n de la OGRRHH" );
		}
	}
	public function closeConnection() {
		ftp_close ( $this->connection );
	}
}

?>