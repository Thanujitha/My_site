<?php

require "connection.php";
$id=$_POST["id"];
$link=$_POST["link"];

Database::iud("UPDATE `order_by` SET `link`='".$link."' WHERE `id`='".$id."'");
echo "sucsess";

?>