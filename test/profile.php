<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 29/11/2016
 * Time: 07:14
 */

include("header.php");

//session_start();
$username = $_GET["username"];
//$test = $_SESSION['test'];

include("dbconnect.php");

$sql_query_name = "SELECT * FROM users2 where username = '$username'";
$result = $db->query($sql_query_name);
while($row = $result->fetch_array()){
    echo "<p>Username: ".$row['username'];
    $ID = $row['ID'];
}

$sql = "SELECT * FROM profiledetails where ID= '$ID'";
$result = $db->query($sql_query_name);
while($row = $result->fetch_array()){
    echo "<p>First Name: ".$row['firstname'];
    echo "<p>Last Name: ".$row['lastname'];
    echo "<p>Age: ".$row['age'];
    echo "<p>Country: ".$row['country'];
    echo $ID;
}

//echo "<p>Test: " . $_SESSION['test'];

//if (isset($_SESSION['test']))
    //echo "session lives!";
//else
    //echo "!";