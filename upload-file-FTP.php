<?php
include "php_files/FTPConnectionManager.php";

echo "Name: ". $_FILES["fileInput"]["name"].'\r\n';
echo "Temp_Name: ".$_FILES["fileInput"]["tmp_name"].'\r\n';

$tempFilePath = $_FILES["fileInput"]["tmp_name"];
$filename = $_FILES["fileInput"]["name"];

$ftpConnectionManager = new FTPConnectionManager($tempFilePath, $filename);
$ftpConnectionManager->closeConnection();

?>