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

$sectionIDArray = array();

// create a SQL query as a string
$sql_query_ID = "SELECT sectionID FROM sectionText WHERE topicID LIKE $topicID";
$sql_query_name = "SELECT sectionName FROM sectionText WHERE topicID LIKE $topicID";

// execute the SQL query
$result_ID = $db->query($sql_query_ID);
$result_name = $db->query($sql_query_name);

// iterate over $result object one $row at a time
// use fetch_array() to return an associative array
for($i = 0; $i < $row = $result_ID->fetch_array(); $i++){
    // print out fields from row of data
    $sectionIDArray[$i] = $row['sectionID'];
    echo $sectionIDArray[$i];
}

$result->close();
// close connection to database
$db->close();