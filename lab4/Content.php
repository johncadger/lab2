<?php
/**
 * Created by PhpStorm.
 * User: 1204848
 * Date: 09/11/2015
 * Time: 13:54
 */

$db = new mysqli(
    "br-cdbr-azure-south-a.cloudapp.net",
    "b8ed5106a0388c",
    "54abfd2d",
    "db_1204848"
);
// test if connection was established, and print any errors
if($db->connect_errno) {
    die('Connectfailed[' . $db->connect_error . ']');
}

$topicID = $_GET["topicID"];

$sectionIDArray = array(1,"a");
$sectionNameArray = array();

// create a SQL query as a string
$sql_query_name = "SELECT sectionName FROM sectionText WHERE topicID LIKE $topicID";

// execute the SQL query
$result_name = $db->query($sql_query_name);

// iterate over $result object one $row at a time
// use fetch_array() to return an associative array
for($i = 0; $i < $row = $result_name->fetch_array(); $i++){
        // print out fields from row of data
        $sectionNameArray[$i] = $row['sectionName'];
        echo $sectionNameArray[$i];
}




$result->close();
// close connection to database
$db->close();