<!DOCTYPE html>
<?php
 session_start();
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Health Buddies</title>
		<link rel="stylesheet" href="stylesheets/splashscreen.css" type="text/css" />
		<?php include_once 'head.php' ?>
		<script src="js/splashscreen.js"></script>
	</head>
	<body>

		<div id="header">
				<a href="index.php"><img src="images/logo.png"/></a>
				<div id="menu">
				<?php if(!isset($_SESSION['sess_ID']))
				 echo '<a id="link_login" class="button" href="#">Login</a><a href="register.php" class="button buttonGray">Register</a>';
				 else {
				 	echo "<input type='button' class='welcome' value='Hey there, ".$_SESSION['sess_FirstName']."'</input><a href='./logout.php' class='button buttonGray'>Logout</a>";
				 }
				?>
				<div id="login">
						<div id="message_login"></div>
						<label for="email">Email</label>
						<input type="text" id="email" class="input_login"></input>
						<label for="password">Password</label>
						<input type="password" id="password" class="input_login"></input>
				</div>
			</div>
<div id="siteinfo"><p>      If you become a member of the Health Buddies  website (it’s free to join), you can track your steps using the website. Your steps are logged, shown visually and can be applied to walking routes and personal or group goals you have. Log-in now and become a member. </p></div>
<div id="mainpic"><img src="images/helpfulfriend.jpg"/></div>
		</div>

		<?php include_once('footer.php'); ?>
	</body>
</html>
