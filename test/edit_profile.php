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

$sql = "SELECT * FROM users2 where username = '{$_SESSION['username']}'";
$result = $db->query($sql);

while($row = $result->fetch_array())
{
    $ID = $row['ID'];
}


if (isset($_SESSION['photographer'])){

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        echo "
        <main>
            <p>Edit Details Here:</p>
            <form action=\"edit_profile.php\" method=\"post\">

        ";

        //$sql = "SELECT * FROM users2 where username = '{$_SESSION['username']}'";
        //$result = $db->query($sql);

        //while($row = $result->fetch_array())
        //{
            //$ID = $row['ID'];
        //}

        $sql = "SELECT * FROM profiledetails where ID = '{$ID}'";
        $result = $db->query($sql);
        while($row = $result->fetch_array())
        {
            echo "<label>First Name: <input type=\"text\" name=\"firstname\" value=\"{$row['firstname']}\"></label></br>";
            echo "<label>Last Name: <input type=\"text\" name=\"lastname\" value=\"{$row['lastname']}\"></label></br>";
            echo "<label>Age: <input type=\"text\" name=\"age\" value=\"{$row['age']}\"></label></br>";
            echo "<label>Country: <input type=\"text\" name=\"country\" value=\"{$row['country']}\"></label>";


            //echo "<li>{$username} - <a href='admin.php?approve=$ID'>Approve</a></li>";
            //echo "<option value= {$ID}>{$username}</option>";
        }

        echo "
                    <p><input type=\"submit\" value=\"Update\"></p>
            </form>
            

            <a href='add_photo.php'>Add Photo</a>

            <p>Edit Photographs Here:</p>

            <section id='edit_photo'>
                ";

        $sql = "SELECT * FROM photos where pID = '{$ID}'";
        $result = $db->query($sql);
        while($row = $result->fetch_array())
        {
            echo"
                <img src={$row['URL']} id=\"edit_image\"/>
                <form action=\"edit_profile.php\" method=\"post\">
                    <label>Title: <input type=\"text\" name=\"title\" value=\"{$row['title']}\"></label></br>
                    <label>Description: <input type=\"text\" name=\"description\" value=\"{$row['description']}\"></label></br>
                    <label>Price: <input type=\"text\" name=\"price\" value=\"{$row['price']}\"></label></br>
                    <p><input type=\"submit\" value=\"Update\"></p>
                </form>

                <a href='edit_profile.php?delete'.{$row['ID']}/>
            ";
        }

echo "</section>

        </main>
        ";


    } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $firstname =  $_POST['firstname'];
        $lastname =  $_POST['lastname'];
        $age =  $_POST['age'];
        $country =  $_POST['country'];

        $sql = "UPDATE profiledetails SET firstname= '{$firstname}', lastname= '{$lastname}', age='{$age}', country= '{$country}' WHERE ID='{$ID}'";
        $db->query($sql);

        header("location:profile.php?username=".$_SESSION['username']);
        //echo "<p><a href=\"profile.php?username=". $_SESSION['username']."\">My Profile</a></p>";




    }





} else{
    header('location:home.php');
}
