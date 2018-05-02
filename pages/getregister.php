<form action="./account/registeruser.php" method="POST">

	<div class="fluidtable">
		<div class="fluidrow">
			<div class="fluidcol">
				<label for="username">Username:</label>
			</div>
			<div class="fluidcol">
				<input type="text" id="username" required>
			</div>
		</div>
		<div class="fluidrow">
			<div class="fluidcol">
				<label for="password">Password:</label>
			</div>
			<div class="fluidcol">
				<input type="password" id="password" required /> 	
			</div>
		</div>
		<div class="fluidrow">
			<div class="fluidcol">
				<label for="repassword">Repeat-Password:</label>
			</div>
			<div class="fluidcol">
				<input type="password" id="repassword" required />
			</div>
		</div>
		<div class="fluidrow">
			<div class="fluidcol">
				<label for="email">E-Mail:</label>
			</div>
			<div class="fluidcol">
				<input type="email" id="email" required />
			</div>
		</div>
		<div>
			<button class="normal">
				Register
			</button>
		</div>
	</div>
</form>