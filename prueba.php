<?php
session_start();
// echo phpinfo() ;
echo session_id()  . "</br>";
// echo $_SESSION;

if( isset($_SESSION["userName"]) ){
	echo "Entro aqui </br>";
	echo $_SESSION["userName"] . "</br>";
	
}else {
	echo "La sesion no se guardo</br>";
	
	$_SESSION["userName"] = "DIEGO";
	echo $_SESSION["userName"] . "</br>";
}

?>