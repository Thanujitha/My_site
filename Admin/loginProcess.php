<?php

$e = $_POST["e"];
$p = $_POST["p"];

session_start();
require "connection.php";

$usar = Database::search("SELECT * FROM `user`");
$user_d = $usar->fetch_assoc();
if ($user_d["email"] == $e and $user_d["password"] == $p) {

    $_SESSION["mysample"] = $user_d;

    $code = uniqid();
    $code = $code .= $user_d["id"];

    setcookie("cookieId", $code, time() + (60 * 60 * 24 * 365));
   
    echo "sucsess";
} else {
    echo "Not Found";
}
