<?php
	session_start();
?>
<!DOCTYPE html>
<HTML>
	<HEAD>
		<TITLE>G.I.T.S Homepage</TITLE>
		<link rel="stylesheet" href="./res/style.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="./res/script.js"></script>
		<meta name="viewport" content="width=device-width , initial-scale = 1.0" />
	</HEAD>
	<BODY>
		<div class="mobiledisplay">
			<div style="display: inline-block; width: 84%;">
				GITS 
			</div>
			<div class="mobilemenu" id="dropdownclick" mtarget="dropdown">
				&#9776;
			</div>
		</div>
		<nav class="navbarfluid" id="dropdown">
			
			<a href="./">Home</a>
			<a href="news.php">News</a>
			<a href="events.php">Events</a>
			<?php
				if(isset($_SESSION["logged"]))
				{
			?>
					<a href="./account/logout.php">Logout</a>
			<?php
				}
				else
				{
			?>
					<a class="active" href="account.php">Account</a>
			<?php
				}
			?>
				<div class="dropdown">
			</div>
		</nav>
		<?php
			if(isset($_SESSION["NOTIFY"]))
			{
		?>
				<div class="notifybox">
					<?php echo $_SESSION["NOTIFYMSG"]; ?>
				</div>
		<?php
				session_unset();
			}
		?>
		<div>
			<div class="tab">
				<nav class="tablist">
					<a href="#" class="active" id="tabbutton" mtarget="tabaccount" actionurl="./pages/getlogin.php">Login</a>
					<a href="#" id="tabbutton" mtarget="tabaccount" actionurl="./pages/getregister.php">Register</a>
				</nav>
			</div>
			<div class="tabbody" id="tabaccount">
			
			</div>
		</div>
	</BODY>
</HTML>