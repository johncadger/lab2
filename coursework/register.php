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

    <form action= "process.php?query=login" method= "post">
        <label>Login<input type= "text" name= "login"></label>
        <label>Password<input type= "text" name= "password"></label>
        <label><input type= "submit" value= "Submit"></label>
    </form>
    <?
    $error = $_GET["error"];
    if($error == "exists"){
        echo "Login already exists!";
    }
    elseif($error == "login"){
        echo "Invalid login!";
    }
    elseif($error == "password"){
        echo "Invalid password!";
    }


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


