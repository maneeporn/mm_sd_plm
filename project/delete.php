<?php
session_start();
require_once ("config.php");
$id = $_GET['id'];
$product = $_GET['product'];
$vendor = $_GET['vendor'];
    $qty = $_GET['qty'];
// $link = $_GET['link'];
// echo $link ."-". $id."-". $product;
$userQuery = "DELETE FROM `product_material` WHERE `material_id`= '$id' and `product_id`='$product'" ;
$result = mysqli_query($connect,$userQuery);

$userQuery = "DELETE FROM `inventory` WHERE `vendor_id`= '$vendor' and `material_id`='$id'" ;
$result = mysqli_query($connect,$userQuery);
header("Location:bom.php?vendor=$vendor&id=$product&qty=$qty");
?>