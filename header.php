<div id="header">
<a href="index.php"><img src="images/logo_small.png"/></a>
			<div id="menu">
				<?php if(!isset($_SESSION['sess_ID']))
				 echo '<a id="link_login" class="button" href="#">Login</a><a href="register.php" class="button buttonGray">Register</a>';
				 else {
				 	echo "<input type='button' class='welcome' value='Hey there, ".$_SESSION['sess_FirstName']."'</input><a href='./logout.php' class='button buttonGray'>Logout</a>";
				 	echo "<ul class='dropdown'>";
				 	if ($_SESSION['sess_Level'] == 2) 
				 		echo "<li><a href='admin.php'>Administartive Settings</a></li>";
				 	echo "<li><a href='admin.php'>Account Settings</a></li>";
				 	echo "</ul>";
				 }
				?>
				<div id="login">
					<form>
						<div id="message_login"></div>
						<label for="email">Email</label>
						<input type="text" id="email" class="input_login"></input>
						<label for="password">Password</label>
						<input type="password" id="password" class="input_login"></input>
					</form>
				</div>
			</div>
			