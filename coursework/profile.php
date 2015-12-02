<?php
/**
 * Created by PhpStorm.
 * User: 1204848
 * Date: 30/11/2015
 * Time: 16:27
 */

include ("db_connect.php");
$ID = 2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<nav>
    <p><a href=/coursework/profile.php>Home</a></p>
    <?
    $sql_query_name = "SELECT title FROM marvelmovies where marvelMovieID = $ID";
    $result = $db->query($sql_query_name);
    while($row = $result->fetch_array()){
        echo "<li>Name: ".$row['title'];
    }
    ?>
    <?
    $sql_query_country = "SELECT productionStudio FROM marvelmovies where marvelMovieID = $ID";
    $result = $db->query($sql_query_country);
    while($row = $result->fetch_array()){
        echo "<li>Country: ".$row['productionStudio'];
    }
    ?>


    <?
    $sql_query_adventures = "SELECT * FROM sections where topicID = $ID";
    $result = $db->query($sql_query_adventures);
    while($row = $result->fetch_array()){
        echo "<li><a href=\"Adventure.php?adventureID=". $row['sectionID']."\">".$row['sectionName']."</a>";
    }
    ?>
</nav>
<?

//$userName = $_GET[$userName];
//$mainQuery = "SELECT * FROM sectionText where sectionID = '$sectionID'";
//$mainResult = $db->query($mainQuery);
//while($row = $mainResult->fetch_array()) {
//    $sectionName = $row['sectionName'];
//    $sectionText = $row['text'];
//}
?>
<main>
    <header>
        <h1><? echo "something" ?></h1>
    </header>
</main>
<section>
    <p><? echo "else" ?></p>
</section>

