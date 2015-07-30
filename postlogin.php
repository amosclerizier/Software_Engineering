<!DOCTYPE html>
<?php
	session_start();

	session_regenerate_id();
	if(!isset($_SESSION['sess_ID']))      // if there is no valid session
	{
    	header("Location: index.php");
	}
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
<!--	<div id="curve_chart" style="width: 900px; height: 500px"></div> -->
<div id="graph"><img src="stepsgraph.php" /></div>
<p style="color:white">Download a chart that will help you track your progress<a href="steps_chart.pdf" target="_blank" download>Here.</a></p>







<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'healthbuddies1';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>



		<?php include_once('footer.php'); ?>
	</body>
</html>


