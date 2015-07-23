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

<!-- the script for generating the graph for the user -->
<script type="text/javascript"
          src="https://www.google.com/jsapi?autoload={
            'modules':[{
              'name':'visualization',
              'version':'1',
              'packages':['corechart']
            }]
          }"></script>

    <script type="text/javascript">
      google.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Steps', 'Recommended Steps'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Health Buddies',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

<!-- end of google script -->

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
	<div id="curve_chart" style="width: 900px; height: 500px"></div>


		<?php include_once('footer.php'); ?>
	</body>
</html>


