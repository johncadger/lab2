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
        header('Location: register.php?error=exists');
    }
    else{
        //Get userID.
        $sql_query_getID = "SELECT * FROM Users";
        $result = $db->query($sql_query_getID);
        while($row = $result->fetch_array()){
            $userID++;
        }
        $userID +=1;
        //Insert information into database.
        $sql_query_insertUser = "INSERT INTO Users"."(user_id, login, password, type, country, name, verified, last_login)"."VALUES ($userID, $login, $password, 'reader', $country, $name, false, '2015-12-14')";
        $db->query($sql_query_insertUser);
        header('Location: profile.php?ID='.$userID);

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
            header('Location: profile.php?ID='.$userID);
        }
        else{
            header('Location: register.php?error=password');
        }
    }
    else{
        header('Location: register.php?error=login');
    }
}



