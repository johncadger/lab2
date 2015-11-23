<?php
/**
 * Created by PhpStorm.
 * User: 1204848
 * Date: 23/11/2015
 * Time: 16:11
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
    <p><strong>Information:</strong> I havent styled this page at all so there isn't really a lot going on. It gives you the basic idea of how this works though.</p>
    <!-- Menu Creation -->
    <?
    $sql_query = "SELECT * FROM sectionText where topicID = '5'";
    $result = $db->query($sql_query);
    while($row = $result->fetch_array()){
        echo "<li><a href=\"Index.php?sectionID=". $row['sectionID']."\">".$row['sectionName']."</a>";
    }
    ?>
</nav>
<?

$sectionID = $_GET[sectionID];
$mainQuery = "SELECT * FROM sectionText where sectionID = '$sectionID'";
$mainResult = $db->query($mainQuery);
while($row = $mainResult->fetch_array()) {
    $sectionName = $row['sectionName'];
    $sectionText = $row['text'];
}
?>
<main>
    <header>
        <h1><? echo $sectionName; ?></h1>
    </header>
</main>
<section>
    <p><? echo $sectionText; ?></p>
</section>