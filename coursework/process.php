<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 09/12/2015
 * Time: 11:49
 */

include ("db_connect.php");

$query = $_GET['query'];

$loginExists = 0;

$login = $_POST["login"];
$password = $_POST["password"];

$sql_query_checkLogin = "SELECT * FROM Users where login LIKE $login";
$result = $db->query($sql_query_checkLogin);
while($row = $result->fetch_array()){
    $loginExists++;
}

if ($loginExists > 0){
    echo $loginExists;
}
else{
    echo "none";
}
