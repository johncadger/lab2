<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 29/11/2016
 * Time: 10:44
 */

include("dbconnect.php");
session_start();

if (isset($_SESSION['admin'])){

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        echo "
        <main>
            <p>Photographers to be approved:</p>
        </main>
        ";

        $sql = "SELECT * FROM users2 where type = 'photographer' and approved = false";
        $result = $db->query($sql);

        while($row = $result->fetch_array())
        {
            $ID = $row['ID'];
            $username = $row['username'];

            echo "<li>{$username} - <a href='admin.php?approve=.$ID'>Approve</a></li>";
            //echo "Username: {$username} and ID: {$ID}";
        }

        echo "
        <main>
            <p>All Users:</p>
        </main>
        ";

        $sql = "SELECT * FROM users2";
        $result = $db->query($sql);

        while($row = $result->fetch_array())
        {
            $ID = $row['ID'];
            $username = $row['username'];

            echo "<li>{$username} - <a href='admin.php?ban=.$ID'>Ban</a></li>";
        }


    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {


        $approveID =  $GET_['approve'];
        $banID = $_GET['ban'];

        echo "$approveID";
        echo "$banID";





    }


} else{
    header("location:home.php");
}





