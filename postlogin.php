<!DOCTYPE html>
<?php
	session_start();
?>

<html>
	<head>
		<meta charset="UTF-8">
		<?php include_once 'head.php'?>
		<script src="js/splashscreen.js"></script>
		<link rel="stylesheet" href="stylesheets/splashscreen.css" type="text/css" />
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
</div>



		<?php include_once('footer.php'); ?>
	</body>
</html>


