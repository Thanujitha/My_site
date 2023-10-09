<?php

require "connection.php";
$id=$_POST["id"];
$link=$_POST["link"];

Database::iud("UPDATE `contact_us` SET `link`='".$link."' WHERE `id`='".$id."'");
echo "sucsess";

?>