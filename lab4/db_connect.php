<?php
/**
 * Created by PhpStorm.
 * User: 1204848
 * Date: 23/11/2015
 * Time: 16:04
 */

$db = new mysqli(
    "br-cdbr-azure-south-a.cloudapp.net",
    "b8ed5106a0388c",
    "54abfd2d",
    "db_1204848"
);

// test if connection was established, and print any errors

if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}

