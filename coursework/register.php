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
    <form action= "process.php?query=register" method= "post">
        <label>Login<input type= "text" name= "login"></label>
        <label>Password<input type= "text" name= "password"></label>
        <label>Country<input type= "text" name= "country"></label>
        <label>Name<input type= "text" name= "name"></label>
        <label><input type= "submit" value= "Submit"></label>
    </form>
    <?


    //Get userID.
    $sql_query_getID = "SELECT * FROM marvelmovies";
    $result = $db->query($sql_query_getID);
    while($row = $result->fetch_array()){
        $userID++;
    }
    $userID +=1;
    echo $userID;

    //Insert information into database.
    //$sql_query_insertUser = "INSERT INTO Category
    //VALUES ($userID,$login,$password,$country,$name);";
    //$db->query($sql_query_insertUser);

    //Store current userID in SESSION.

    $_SESSION['userID'] = $userID;
    echo $_SESSION['userID'];

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


