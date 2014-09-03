<?php header ('Content-type: text/html; charset=iso-8859-1');?>
<?php
session_start ();
$userName = null;
$userId = null;
if (isset ( $_SESSION ['userName'] )) {
	// echo $_SESSION['userName'];
// 	echo ("I'm Fine");
	$userId = $_SESSION ['userId'];
	$userName = $_SESSION ['userName'];
} else {
	// echo $_SESSION['userName'];
// 	echo ("I'm wrong");
}
?>