<?php
include "php_files/FTPConnectionManager.php";
include "php_files/UserDAO.php";

$userName = $_POST ["userName"];
$password = $_POST ["password"];

$userDAO = new UserDAO();
$userDAO->setProperties(null, $userName, $password, 1);
$queryResult = $userDAO->findUserLogin();

// echo $queryResult;
if($queryResult != 0){
// 	echo "true";
// 	session_name("userLogin");
	session_start();
	$_SESSION['userName'] = $userName;
	$_SESSION['password'] = $password;
}else{
// 	echo "false";
}

// header('Location: /index.php');
?>
<script>
window.location.replace("index.php");
</script>
