<?php
/**
 * Created by PhpStorm.
 * User: 1204848
 * Date: 30/11/2015
 * Time: 16:27
 */
$username = "a";
$country = "b";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<nav>
    <p>lanslfa</p>
    <?
    //$sql_query = "SELECT * FROM User where userID = $_COOKIE['user']";
    //$result = $db->query($sql_query);
    //while($row = $result->fetch_array()){
    //    echo "<li><a href=\"Adventure.php?adventureID=". $row['adventureID']."\">".$row['adventureName']."</a>";
    //}
    ?>


    <?
    //$sql_query = "SELECT * FROM Adventures where userID = $user";
    //$result = $db->query($sql_query);
    //while($row = $result->fetch_array()){
    //    echo "<li><a href=\"Adventure.php?adventureID=". $row['adventureID']."\">".$row['adventureName']."</a>";
    //}
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
        <h1><? echo $username ?></h1>
    </header>
</main>
<section>
    <p><? echo $country ?></p>
</section>

