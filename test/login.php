<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 29/11/2016
 * Time: 12:34
 */
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    // execute if requested using HTTP GET Method
    ?>
    <main>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="username"></br>
            <input type="password" name="password" placeholder="password"></br>
            <p><input type="submit" value="Submit"></p>
        </form>

        <li><a href="home.php"</a>Cancel Login</li>

    </main>
    <?

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {


    include("dbconnect.php");

    $username = $_POST["username"];
    $password = $_POST["password"];


    function checklogin($username, $password, $db)
    {
        $sql = "SELECT * FROM users2 WHERE username='" . $username . "' and password='" . $password . "'and type='shopper'";
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
        //Check if Photographer then Check if Admin

        function checklogin2($username, $password, $db)
        {
            $sql = "SELECT * FROM users2 WHERE username='" . $username . "' and password='" . $password . "'and type='photographer'";
            $result = $db->query($sql);
            while ($row = $result->fetch_array()) {
                return true;
            }
            return false;
        }

        if (checklogin2($username, $password, $db)) {
            session_start();
            $_SESSION['username'] = $username;
            header("location:home.php");
        } else {

            function checklogin3($username, $password, $db)
            {
                $sql = "SELECT * FROM users2 WHERE username='" . $username . "' and password='" . $password . "'and type='admin'";
                $result = $db->query($sql);
                while ($row = $result->fetch_array()) {
                    return true;
                }
                return false;
            }

            if (checklogin3($username, $password, $db)) {
                session_start();
                $_SESSION['username'] = $username;
                header("location:home.php");
            } else {
                header("location:login.php");
            }

        }
    }


} else {
    // this is impossible
    print('whoops');
}