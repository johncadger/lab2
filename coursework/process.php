<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 09/12/2015
 * Time: 11:49
 */

include ("db_connect.php");

$login = $_POST["login"];
$password = $_POST["password"];
$country = $_POST["country"];
$name = $_POST["name"];

$query = $_GET['query'];

$sql_query_checkLogin = "SELECT * FROM marvelMovies where yearReleased = $login";
$result = $db->query($sql_query_checkLogin);
while($row = $result->fetch_array()){
    $loginExists++;
}

echo $loginExists;