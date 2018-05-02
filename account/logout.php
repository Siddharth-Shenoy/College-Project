<?php
	session_start();
	if(isset($_SESSION["logged"]))
	{
		session_unset();
		session_destroy();
		session_start();
		$_SESSION["NOTIFY"] = 1;
		$_SESSION["NOTIFYMSG"] = "Sucessfully logged out!";
		header("Location: ../");
	}
?>