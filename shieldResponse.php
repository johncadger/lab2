<?php
/**
 * Created by PhpStorm.
 * User: 1204848
 * Date: 26/10/2015
 * Time: 16:09
 */

$forename = $_GET["forename"];
$surname = $_POST["surname"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];

echo $forename . $surname . $dob . $gender;