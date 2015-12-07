<?php
/**
 * Created by PhpStorm.
 * User: 1204848
 * Date: 30/11/2015
 * Time: 16:27
 */

include ("db_connect.php");
//$_SESSION['userID'] where $ID is used.
$ID = $_SESSION['userID'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<nav>
    <?//Link to homepage.?>
    <p><a href=/coursework/profile.php>Home</a></p>
    <?
    //Getting name of user from database based on userID.
    $sql_query_name = "SELECT title FROM marvelmovies where marvelMovieID = $ID";
    $result = $db->query($sql_query_name);
    while($row = $result->fetch_array()){
        echo "<li>Name: ".$row['title'];
    }
    ?>
    <?
    //Getting user's country from database based on userID.
    $sql_query_country = "SELECT productionStudio FROM marvelmovies where marvelMovieID = $ID";
    $result = $db->query($sql_query_country);
    while($row = $result->fetch_array()){
        echo "<li>Country: ".$row['productionStudio'];
    }
    ?>
    <?
    //Creating list of adventure links using userID.
    $sql_query_adventures = "SELECT * FROM sections where topicID = $ID";
    $result = $db->query($sql_query_adventures);
    while($row = $result->fetch_array()){
        echo "<li><a href=\"Adventure.php?adventureID=". $row['sectionID']."\">".$row['sectionName']."</a>";
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

