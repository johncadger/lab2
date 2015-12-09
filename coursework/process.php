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

$sql_query_checkLogin = "SELECT title FROM marvelmovies where yearReleased = $login";
$result = $db->query($sql_query_checkLogin);
while($row = $result->fetch_array()){
    $loginExists++;
}

if ($query = "register"){
    $country = $_POST["country"];
    $name = $_POST["name"];

    //Get userID.
    $sql_query_getID = "SELECT * FROM marvelmovies";
    $result = $db->query($sql_query_getID);
    while($row = $result->fetch_array()){
        $userID++;
    }
    $userID +=1;

    if($loginExists > 0){
        header('Location: register.php?p_query=exists');
    }
    else{
        //Insert information into database.
        //$sql_query_insertUser = "INSERT INTO marvelmovies(marvelMovieID, yearReleased, title, productionStudio, notes) VALUES ($userID, $login, $password, $country, $name)";
        //$db->query($sql_query_insertUser);
        //$_SESSION['userID'] = $userID;
    }
}
elseif($query = "login"){
    if($loginExists > 0){
        $sql_query_findID = "SELECT * FROM marvelmovies where yearReleased = $login";
        $result = $db->query($sql_query_findID);
        while($row = $sql_query_findID->fetch_array()) {
            $_SESSION['userID'] = $row['marvelMovieID'];
        }
        header('Location: profile.php');
    }
    else{
        header('Location: register.php?p_query=invalid');
    }
}
