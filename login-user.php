<?php
include "php_files/FTPConnectionManager.php";
include "php_files/UserDAO.php";

$userId = null;
$userName = $_POST ["userName"];
$password = $_POST ["password"];

$userDAO = new UserDAO();
$userDAO->setProperties(null, $userName, $password, 1);
$queryResult = $userDAO->findUserLogin();

// echo $queryResult;
if($queryResult != 0){
// 	echo $queryResult;
// 	session_name("userLogin");
	$userResult = $userDAO->getUser();
	
	while ( $row = mysql_fetch_assoc ( $userResult ) ) {
		$userId = $row['id'];	
		$userName = $row['name'];
	}
	
	session_start();
	$_SESSION['userName'] = $userName;
	$_SESSION['userId'] = $userId;
}else{
// 	echo "false";
}

// header('Location: /index.php');
?>
<script>
window.location.replace("index.php");
</script>
