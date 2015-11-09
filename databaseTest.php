<?php
/**
 * Created by PhpStorm.
 * User: 1204848
 * Date: 02/11/2015
 * Time: 15:24
 */
// connect to your Azure server and select database (remember you connection details are all on the azure portal
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

// create a SQL query as a string
$sql_query = "SELECT * FROM marvelMovies WHERE yearReleased LIKE 2003";

// execute the SQL query
$result = $db->query($sql_query);

// iterate over $result object one $row at a time
// use fetch_array() to return an associative array
while($row = $result->fetch_array()){
    // print out fields from row of data
    echo $row['superheroName'] . "/n";
}

$result->close();
// close connection to database
$db->close();
