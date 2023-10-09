<?php

require "connection.php";
session_start();
$user = $_SESSION["mysample"];
$email = $user["email"];


$discription = $_POST["d"];
$about = $_POST["a"];

$allowed_image_extentions = array("image/jpeg", "image/png", "image/svg", "image/jpg");

$user_r = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "'");

    $ud = $user_r->fetch_assoc();

    if (isset($_FILES["u"])) {
        $imageFile = $_FILES["u"];
        $file_extention = $imageFile["type"];
        $newimgextention;
        if ($file_extention = "image/jpeg") {
            $newimgextention = ".jpeg";
        } else if ($file_extention = "image/jpg") {
            $newimgextention = ".jpg";
        } else if ($file_extention = "image/png") {
            $newimgextention = ".png";
        } else if ($file_extention = "image/svg") {
            $newimgextention = ".svg";
        }

        $fileName = "";

        if (!in_array($file_extention, $allowed_image_extentions)) {
            echo "This File Type Note allowed";
        } else {

            $fileName = "assets//img//profileImage//" . uniqid() . $newimgextention;

            move_uploaded_file($imageFile["tmp_name"], $fileName);
        }
        Database::iud("UPDATE `user` SET `profile_img`='" . $fileName . "' WHERE `email` ='" . $email . "' ");

       
        echo "sucsess";
    } else {
        echo "No Image Found";
    }
    Database::iud("UPDATE `user` SET `discription`='" . $discription . "' WHERE `email` ='" . $email . "' ");
    Database::iud("UPDATE `user` SET `about`='".$about."' WHERE `email` ='" . $email . "' ");
   
    echo "sucsess";