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



if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    echo "

    <form action=\"add_photo.php\" method=\"post\" enctype=\"multipart/form-data\">
        Select photograph to upload:
        <input type=\"file\" name=\"fileToUpload\" id=\"fileToUpload\">
        //Title, description and price
        <label>Title: <input type=\"text\" name=\"title\"></label></br>
        <label>Description: <input type=\"text\" name=\"description\"></label></br>
        <label>Price: <input type=\"text\" name=\"price\" placeholder='decimal value ex:10.99'></label></br>
        <input type=\"submit\" value=\"Upload Image\" name=\"submit\">
    </form>




";



} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }


// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {

        //(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

            //INSERT into DB with metadata
            $title = $_POST["title"];
            $description = $_POST["description"];
            $price = $_POST["price"];

            $idCount = 1;

            $sql = "SELECT * FROM photos";
            $result = $db->query($sql);
            while ($row = $result->fetch_array()) {
                $idCount++;
            }

            $sql = "SELECT * FROM users2 WHERE  username='{$_SESSION['username']}'";
            $result = $db->query($sql);
            while ($row = $result->fetch_array()) {
                $pID = $row['ID'];
            }

            echo $target_file;
            echo $_FILES["fileToUpload"]["tmp_name"];
            echo basename($_FILE["fileToUpload"]["name"]);

            //$sql = "INSERT INTO photos (ID, URL, title, description, price, pID) VALUES ('". $idCount ."','\". $target_file .\"', '" .$title."', '".$description."', '".$price."', $pID)";
            //$db->query($sql);


        } else {
            echo "Sorry, there was an error uploading your file.";
            echo $target_file;
        }
    }


}
