<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 09/12/2015
 * Time: 11:49
 */

$login = $_POST["login"];
$password = $_POST["password"];
$country = $_POST["country"];
$name = $_POST["name"];

$query = $_GET['query'];

if($query = "register"){
    echo "r";
    echo $name;
}