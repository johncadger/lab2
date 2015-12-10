<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 09/12/2015
 * Time: 11:49
 */

include ("db_connect.php");

$query = $_GET["query"];

$loginExists = 0;
$passwordExists = 0;

$login = $_POST["login"];
$password = $_POST["password"];

$sql_query_checkLogin = "SELECT * FROM Users where login LIKE '$login'";
$result = $db->query($sql_query_checkLogin);
while($row = $result->fetch_array()){
    $loginExists++;
}

if ($query == "register"){
    $country = $_POST["country"];
    $name = $_POST["name"];

    if($loginExists > 0){
        header('Location: register.php');
    }
    else{
        //Get userID.
        $sql_query_getID = "SELECT * FROM Users";
        $result = $db->query($sql_query_getID);
        while($row = $result->fetch_array()){
            $userID++;
        }
        $userID +=1;
        $_SESSION['userID'] = $userID;
        //Insert information into database.
        //$sql_query_insertUser = "INSERT INTO marvelmovies(marvelMovieID, yearReleased, title, productionStudio, notes) VALUES ($userID, $login, $password, $country, $name)";
        //$db->query($sql_query_insertUser);
        echo $_SESSION['userID'];

    }
}
elseif($query == "login"){
    if($loginExists > 0){

        $sql_query_findID = "SELECT * FROM Users where login = '$login'";
        $result = $db->query($sql_query_findID);
        while($row = $result->fetch_array()) {
            $userID = $row['user_id'];
        }

        $sql_query_checkPassword = "SELECT * FROM Users where user_id = '$userID' and password = '$password'";
        $result = $db->query($sql_query_checkPassword);
        while($row = $result->fetch_array()){
            $passwordExists++;
        }
        if ($passwordExists > 0){
            header('Location: profile.php');
        }
        else{
            header('Location: register.php');
        }
    }
    else{
        header('Location: register.php');
    }
}



