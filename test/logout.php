<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 29/11/2016
 * Time: 12:05
 */

session_start();
if (isset($_SESSION['username']))
{
    unset($_SESSION['username']);
}
header("location:home.php");
