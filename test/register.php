<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    // execute if requested using HTTP GET Method
    ?>
    <main>
        <form action="register.php" method="post">
            <input type="text" name="username" placeholder="username"></br>
            <input type="password" name="password" placeholder="password"></br>
            <p><input type="submit" value="Submit"></p>
        </form>
    </main>
    <?

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {


    include("dbconnect.php");

    $username = $_POST["username"];
    $password = $_POST["password"];


    function checklogin($username, $password, $db)
    {
        $sql = "SELECT * FROM users1 WHERE username='" . $username . "' and password='" . $password . "'";
        $result = $db->query($sql);
        while ($row = $result->fetch_array()) {
            return true;
        }
        return false;
    }

    if (checklogin($username, $password, $db)) {
        session_start();
        $_SESSION['username'] = $username;
        header("location:home.php");
    } else {
        header("location:register.php");
    }


} else {
    // this is impossible
    print('whoops');
}
?>