<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 29/11/2016
 * Time: 10:44
 */

session_start();

echo "<a href=''>PhotoShare</a>";


if (isset($_SESSION['username']))
    echo "<a href='logout.php'>Logout</a>";
else
    echo "<a href='register.php'>Register/Sign In</a>";

//if (isset($_SESSION['admin']))
//    echo "<a href=''>Admin</a>";

//if (isset($_SESSION['photographer']))
//    echo "<a href=''>Chat</a>";