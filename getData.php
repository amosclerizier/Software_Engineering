<?php
$con = mysql_connect('localhost', 'root', 'Cookiemonster1!') or die('Error connecting to server');

mysql_select_db('healthbuddies', $con);

// write your SQL query here (you may use parameters from $_GET or $_POST if you need them)
$query = mysql_query('SELECT date, steps FROM steps');

$table = array();
$table['cols'] = array(
        /* define your DataTable columns here
         * each column gets its own array
         * syntax of the arrays is:
         * label => column label
         * type => data type of column (string, number, date, datetime, boolean)
         */
        // I assumed your first column is a "string" type
        // and your second column is a "number" type
        // but you can change them if they are not
    array('label' => 'Date', 'type' => 'string'),
        array('label' => 'Steps', 'type' => 'number')
);


$rows = array();
while($r = mysql_fetch_assoc($query)) {
    $temp = array();
        // each column needs to have data inserted via the $temp array
        $temp[] = array('v' => $r['date']);
        $temp[] = array('v' => (int) $r['steps']); // typecast all numbers to the appropriate type (int or float) as needed - otherwise they are input as strings

        // insert the temp array into $rows
    $rows[] = array('c' => $temp);
}

// populate the table with rows of data
$table['rows'] = $rows;

// encode the table as JSON
$jsonTable = json_encode($table);

// set up header; first two prevent IE from caching queries
//header('Cache-Control: no-cache, must-revalidate');
//header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
//header('Content-type: application/json');

// return the JSON data
echo $jsonTable;

?>
