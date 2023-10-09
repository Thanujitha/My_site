<?php

require "connection.php";
session_start();
$user = $_SESSION["mysample"];
$email = $user["email"];

if ($_POST["cid"] != "0") {

    $cid = $_POST["cid"];

    $allowed_image_extentions = array("image/jpeg", "image/png", "image/svg", "image/jpg");


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

        if (!in_array($file_extention, $allowed_image_extentions)) {
            echo "This File Type Note allowed";
        } else {

            $imgpath = "assets//img//sample//" . uniqid() . $newimgextention;
            move_uploaded_file($imageFile["tmp_name"], $imgpath);

            //file Upload All files

            $id = uniqid();
            mkdir("assets//file//" . $id);
            $a = 1;
            $htmlfilepath="";            
            
            for ($i = 0; $i < $a; $i++) {
            
                if (isset($_FILES["files" . intval($i)])) {
            
                    $uploadedFiles = $_FILES['files' . intval($i)];
                    $name = $uploadedFiles["name"];
            
                    $filepath = "assets//file//" . $id . "//";
            
                    move_uploaded_file($uploadedFiles["tmp_name"], $filepath.$name);
            
                    $a = $a + 1;
            
                    if ($uploadedFiles["type"] == "text/html") {
                        $htmlfilepath=  $filepath.$name;
                    } 
                    
                }
            }
            
            //file Upload All files

            Database::iud("INSERT INTO `sample`(`design_category_id`,`img`,`file_path`) value('" . $cid . "','" . $imgpath . "','".$htmlfilepath."')");

            echo "sucsess";
        }

    } else {
        echo "No Image Found";
    }
} else {
    echo "Select Category";
}


