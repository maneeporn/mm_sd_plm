<?php
session_start();
require_once ("config.php");
$id = $_GET['id'];
//echo $id ;
$userQuery = "DELETE FROM `product_material` WHERE `product_id` = '$id'" ;
$result = mysqli_query($connect,$userQuery);
header("Location:deleteproduct2.php?id=$id");

?>

