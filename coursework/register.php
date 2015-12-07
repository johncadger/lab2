<?php
/**
 * Created by PhpStorm.
 * User: 1204848
 * Date: 07/12/2015
 * Time: 13:54
 */

include ("db_connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<nav>
    <form action= "profile.php" method= "post">
        <label>Login<input type= "text" name= "login"></label>
        <label>Password<input type= "text" name= "password"></label>
        <label>Country<input type= "text" name= "country"></label>
        <label>Name<input type= "text" name= "name"></label>
        <label><input type= "submit" value= "Submit"></label>
    </form>
    <?
    $login = $_POST["login"];
    $password = $_POST["password"];
    $country = $_POST["country"];
    $name = $_POST["name"];

    //Get userID.
    $sql_query_getID = "SELECT COUNT(marvelMovieID) FROM marvelmovies";
    $result = $db->query($sql_query_getID);
    $userID = $result +1;
    echo $userID;

    //Insert information into database.



    //Store current userID in SESSION.

    ?>

</nav>
<main>
    <header>
        <h1><? echo "something" ?></h1>
    </header>
</main>
<section>
    <p><? echo "else" ?></p>
</section>


