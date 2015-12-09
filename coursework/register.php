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

    $query = $_GET['query'];
    if ($query = "exists"){
        echo "Login already exists!";
    }


    //Get userID.
    $sql_query_getID = "SELECT * FROM marvelmovies";
    $result = $db->query($sql_query_getID);
    while($row = $result->fetch_array()){
        $userID++;
    }
    $userID +=1;
    echo $userID;

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


