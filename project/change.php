<?php
session_start();
require_once ("config.php");
$id = $_GET['id'];
$product = $_GET['product'];
$link = $_GET['link'];
echo $link ."-". $id."-". $product;
// $userQuery = "DELETE FROM `product_material` WHERE `material_id`= '$id' and `product_id`='$product'" ;
// $result = mysqli_query($connect,$userQuery);
header("Location:$link");
?>