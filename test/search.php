<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 28/11/2016
 * Time: 19:43
 */

include("dbconnect.php");

echo "
<main>
<h2>Blog Articles</h2>
<p>Below is a list of all blog articles</p>
<ul>
";

$term = $_POST["term"];

$sql = "SELECT * FROM blogArticles where articleID = '$term'";
$result1 = $db->query($sql);

$sql = "SELECT * FROM users1 where username = '$term'";
$result2 = $db->query($sql);

while($row = $result->fetch_array())
{
    $articleID = $row['articleID'];
    $articleName = $row['articleName'];
    $articleAuthor = $row['articleAuthor'];

    echo "<li><a href='blog/{$articleID}'>{$articleName}</a> by {$articleAuthor}</li>";
}

while($row = $result1->fetch_array())
{
    $username = $row['username'];

    echo "<li><a href=''>$username</a> by {$articleAuthor}</li>";
}

echo "
</main>
";