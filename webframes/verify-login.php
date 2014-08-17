<?php
session_start ();
$userName = null;
if (isset ( $_SESSION ['userName'] )) {
	// echo $_SESSION['userName'];
// 	echo ("I'm Fine");
	$userName = $_SESSION ['userName'];
} else {
	// echo $_SESSION['userName'];
// 	echo ("I'm wrong");
}
?>