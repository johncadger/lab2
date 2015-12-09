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
$userID = $_SESSION['userID'];

$query = $_GET['query'];

$sql_query_checkLogin = "SELECT title FROM marvelmovies where yearReleased = $login";
$result = $db->query($sql_query_checkLogin);
while($row = $result->fetch_array()){
    $loginExists++;
}

if($query = "register"){
    if($loginExists > 0){
        header('Location: register.php?query=exists');
    }
    else{
        //Insert information into database.
        $sql_query_insertUser = "INSERT INTO marvelmovies(marvelMovieID, yearReleased, title, productionStudio, notes) VALUES ($userID, $login, $password, $country, $name)";
        $db->query($sql_query_insertUser);
    }
}

if($query = "login"){
    if($loginExists > 0){

    }
    else{
        header('Location: register.php?query=invalid');
    }
}