<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 29/11/2016
 * Time: 07:14
 */

include("header.php");
include("dbconnect.php");
session_start();


if (isset($_SESSION['photographer'])){

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        echo "
        <main>
            <p>Edit Details Here:</p>
            <form action=\"edit_profile.php\" method=\"post\">

        ";

        $sql = "SELECT * FROM users2 where username = '{$_SESSION['username']}'";
        $result = $db->query($sql);

        while($row = $result->fetch_array())
        {
            $ID = $row['ID'];
        }

        $sql = "SELECT * FROM profiledetails where ID = '{$ID}'";
        $result = $db->query($sql);
        while($row = $result->fetch_array())
        {
            echo "<input type=\"text\" name=\"firstname\" placeholder=\"{$row['firstname']}\">";
            echo "<input type=\"text\" name=\"lastname\" placeholder=\"{$row['lastname']}\">";
            echo "<input type=\"text\" name=\"age\" placeholder=\"{$row['age']}\">";
            echo "<input type=\"text\" name=\"country\" placeholder=\"{$row['country']}\">";


            //echo "<li>{$username} - <a href='admin.php?approve=$ID'>Approve</a></li>";
            //echo "<option value= {$ID}>{$username}</option>";
        }

        echo "
                    <p><input type=\"submit\" value=\"Update\"></p>
            </form>
        </main>
        ";


    } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    }





} else{
    header('location:home.php');
}
