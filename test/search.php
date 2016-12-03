<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 28/11/2016
 * Time: 19:43
 */

include("header.php");

include("dbconnect.php");

echo "<p>Photographers: </p>";

$term = $_POST["search"];

$sql = "SELECT * FROM users2 where username = '$term' and type = 'photographer'";
$result = $db->query($sql);

while($row = $result->fetch_array())
{
    //$username = $row['username'];
    echo "<a href='profile.php?username={$row['username']}'>{$row['username']}</a>";
}

echo"<p>Photographs: </p>";


//change to photos
$sql = "SELECT * FROM photos where title = '$term'";
$result = $db->query($sql);

while($row = $result->fetch_array()) {
    //$articleID = $row['articleID'];
    //$articleName = $row['articleName'];
    //$articleAuthor = $row['articleAuthor'];

    //container with image, details and purchase option

    echo "
        <section id='photoNode'>
            <img src={$row['URL']} id=\"search_image\"/>
            <p>Title: {$row['title']}</p>
            <p>Description: {$row['description']}</p>
            <p>Price: £{$row['price']}</p>";

    $purchaseID = $row['ID'];

    $sql = "SELECT * FROM users2 WHERE ID = {$row['pID']}";
    $result = $db->query($sql);
    while($row = $result->fetch_array()){

        echo "<p>Photographer: <a href='profile.php?username={$row['username']}'>{$row['username']}</a></p>";

    }


    if (isset($_SESSION['shopper'])) {
        echo "
        <form action='purchase.php' method='post'>
            <button name=\"purchaseID\" type=\"submit\" value=\"{$purchaseID}\">Purchase</button>
        </form>

        ";

        echo "
        </section>
    ";

    }
}