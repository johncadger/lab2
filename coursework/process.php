<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 09/12/2015
 * Time: 11:49
 */

$login = $_POST["login"];
$password = $_POST["password"];
$country = $_POST["country"];
$name = $_POST["name"];

$query = $_GET['query'];

$sql_query_checkLogin = "SELECT * FROM marvelmovies";
$result = $db->query($sql_query_checkLogin);
while($row = $result->fetch_array()){
    if($login = $row['yearReleased']){
        $loginExists = true;
    }
}

if($query = "register"){
    if($loginExists = true){
        header('Location: register.php?query=exists');
    }
    else{
        //Insert information into database.
        $sql_query_insertUser = "INSERT INTO Category
        VALUES ($userID,$login,$password,$country,$name);";
        $db->query($sql_query_insertUser);
    }
}