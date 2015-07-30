<?php
include('./phpgraphlib.php');
$graph = new PHPGraphLib(1000, 350);


//$data = array(12124, 5535, 43373, 22223, 90432, 23332, 15544, 24523, 32778, 
//	38878, 28787, 33243, 34832, 32302);

$link = mysql_connect('localhost', 'root', 'Cookiemonster1!')
   or die('Could not connect: ' . mysql_error());
     
mysql_select_db('healthbuddies') or die('Could not select database');
  
$dataArray=array();
  
//get data from database
$sql="SELECT date, steps  FROM steps";
$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
if ($result) {
  while ($row = mysql_fetch_assoc($result)) {
      $salesgroup=$row["date"];
      $count=$row["steps"];
      //add to data areray
      $dataArray[$salesgroup]=$count;
  }
}
  
//configure graph
//$graph->addData($dataArray);
//$graph->setTitle("Steps");
//$graph->setGradient("lime", "green");
//$graph->setBarOutlineColor("black");
//$graph->createGraph();



$graph->addData($dataArray);
$graph->setTitle('Steps');
$graph->setBars(false);
$graph->setLine(true);
$graph->setDataPoints(true);
$graph->setDataPointColor('black');
$graph->setDataValues(true);
$graph->setDataValueColor('black');
$graph->setGoalLine(6000);
$graph->setGoalLineColor('blue');
$graph->createGraph();
?>
