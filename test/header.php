<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 29/11/2016
 * Time: 10:44
 */

session_start();

echo "
<link rel=\"stylesheet\" href=\"style.css\">

<a href='home.php' class='hdr' id='logo'>PhotoShare</a>";


if (isset($_SESSION['username'])) {
    echo "<h1><a href='logout.php'>Logout</a> Welcome, {$_SESSION['username']}</h1>";
}else{
    echo "<a href='login.php' class='hdr'>Sign In</a>";
    echo "<a href='register.php'class='hdr'>Register</a>";
}


if (isset($_SESSION['admin']))
    echo "<a href='admin.php'>Admin</a>";

if (isset($_SESSION['photographer'])){

    //$username = $_SESSION['username'];

    //echo "<p><a href='profile.php?username='.{$username}>My Profile</a></p>";

    echo "<p><a href=\"profile.php?username=". $_SESSION['username']."\">My Profile</a></p>";
    //echo "<li><a href='profile.php?username='{$username}>{$username}</a></li>";

    echo "<a href=''>Chat</a>";

}
