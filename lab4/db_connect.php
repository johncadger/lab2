<?php
/**
 * Created by PhpStorm.
 * User: 1204848
 * Date: 23/11/2015
 * Time: 16:04
 */

$db = new mysqli(
    "eu-cdbr-azure-west-c.cloudapp.net",
    "b0c2ff384f05bb",
    "82b4d3a0",
    "mjc7778db"
);

// test if connection was established, and print any errors

if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}

