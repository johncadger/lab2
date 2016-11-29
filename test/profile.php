<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 29/11/2016
 * Time: 07:14
 */
$username = $_GET["username"];
$test = $_SESSION['username'];

include("dbconnect.php");

$sql_query_name = "SELECT * FROM users1 where username = '$username'";
$result = $db->query($sql_query_name);
while($row = $result->fetch_array()){
    echo "<p>Name: ".$row['username'];
}

echo $test;