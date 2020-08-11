<?php
session_start();
require_once ("config.php");
$id = $_GET['id'];
//echo $id ;
$userQuery = "DELETE FROM `product` WHERE `product_id` = '$id'" ;
$result = mysqli_query($connect,$userQuery);
header("Location:03_check-product.php");
?>

