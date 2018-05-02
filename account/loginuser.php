<?php
	session_start();
	if(!isset($_SESSION["logged"]))
	{
		if(isset($_POST["username"]) && isset($_POST["password"]))
		{
			$connection = mysqli_connect("localhost","root","","college");

			$name = mysqli_real_escape_string($connection,$_POST["username"]);
			$pass = mysqli_real_escape_string($connection,$_POST["password"]);
			$pass = hash("SHA512",$pass);
			$query_string = "SELECT * FROM `users` WHERE `uname` = '$name' AND `upass` = '$pass'";
			$query = mysqli_query($connection,$query_string);
			if(mysqli_num_rows($query))
			{
				$assoc = mysqli_fetch_assoc($query);
				$_SESSION["logged"] = 1;
				$_SESSION["alevel"] = $assoc["alevel"];
				$_SESSION["NOTIFY"] = 1;
				$_SESSION["NOTIFYMSG"] = "Logged In Sucessfully!";
				header("Location: ../");
			}
			else
			{
				$_SESSION["NOTIFY"] = 1;
				$_SESSION["NOTIFYMSG"] = "Login failure";
				header("Location: ../account.php");
			}
			mysqli_close($connection);
		}
		else
		{
			$_SESSION["NOTIFY"] = 1;
			$_SESSION["NOTIFYMSG"] = "Login failure 2";
			header("Location: ../account.php");
		}
	}
	else
	{
		$_SESSION["NOTIFY"] = 1;
		$_SESSION["NOTIFYMSG"] = "Login failure 3";
		header("Location: ../account.php");
	}
?>
