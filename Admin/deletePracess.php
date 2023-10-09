<?php

$id=$_GET["id"];
require "connection.php";

Database::iud("DELETE FROM `sample` WHERE `id`='".$id."'");
echo "sucsess";

?>