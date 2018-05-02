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
			<a class="active" href="events.php">Events</a>
			<?php
				if(isset($_SESSION["logged"]))
				{
			?>
					<a href="logout.php">Logout</a>	
			<?php
				}
				else
				{
			?>
					<a href="account.php">Account</a>
			<?php
				}
			?>
				<div class="dropdown">
			</div>
		</nav>
		<?php
			$connection = mysqli_connect("localhost","root","","college");
			$query_string = "SELECT * FROM `events` ORDER BY `eventdate`,`eventtime`";
			$query = mysqli_query($connection,$query_string);
			$rows = 0;
			$cols = 0;
			$closemaindiv = false;
			if(mysqli_num_rows($query))
			{
				
				while($assoc = mysqli_fetch_assoc($query))
				{
					if($cols%4 == 0)
					{
						if($closemaindiv)
						{
							echo "</div>";
							$closemaindiv = false;
						}
						echo "<div class='eventmainbox'>";
						$closemaindiv = true;
					}	
					echo "<div class='eventbox'>
							<header>".$assoc["eventheader"]."
							</header>
							<section class='datetime'>".$assoc["eventdate"]." ".$assoc["eventtime"]."</section>
							<div class='eventboxbody'>".$assoc["eventbody"].
							"</div>
						</div>";
					$cols++;

				}
			}
			else
			{
				echo "<div class=\"errorbox\">No events found!</div>";
			}
		?>
		<!--- <div class="eventmainbox">
			<div class="eventbox">
				<header>
				Test
				</header>
				<div class="eventboxbody">
					Event box body!
				</div>
			</div>
			<div class="eventbox">
				<header>
				Test
				</header>
				<div class="eventboxbody">
					Event box body!
				</div>
			</div>
			<div class="eventbox">
				<header>
				Test
				</header>
				<div class="eventboxbody">
					Event box body!
				</div>
			</div>
			<div class="eventbox">
				<header>
					Test
				</header>
				<div class="eventboxbody">
					Event box body!
				</div>
			</div>
		</div> -->

	</BODY>
</HTML>