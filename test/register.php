<?php


if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    ?>
    <main>
        <form action="register.php" method="post">
            <input type="text" name="username" placeholder="username"></br>
            <input type="password" name="password" placeholder="password"></br>
            <select name="type">
                <option value="shopper">Shopper</option>
                <option value="photographer">Photographer</option>
            </select></br>
            <p><input type="submit" value="Submit"></p>
        </form>

        <li><a href="home.php"</a>Cancel Registration</li>

    </main>

    <?

} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    include("dbconnect.php");

    $username = $_POST["username"];
    $password = $_POST["password"];
    $type = $_POST["type"];

    $idCount = 1;

    $sql = "SELECT * FROM users2";
    $result = $db->query($sql);
    while ($row = $result->fetch_array()) {
        $idCount++;
    }

    $sql = "INSERT INTO users2 (ID, username, password, type, approved) VALUES ('". $idCount ."', '" .$username."', '".$password."', '".$type."', false)";
    $db->query($sql);

    header("location:login.php");








}