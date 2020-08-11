<?php
session_start();
require_once ("config.php");
$pid = $_GET['pid'];
$pname = $_GET['pname'];
$pprice = $_GET['pprice'];
$qty = $_GET['qty'];
$ptype = $_GET['ptype'];
$ptdc = $_GET['ptdc'];
$detail = $_GET['detail'];
$pic = $_GET['pic'];
$pic2 = $_GET['pic2'];

$userQuery = "INSERT INTO `product`(`product_id`, `product_name`, `product_price`, `product_qty`, `product_type`, `product_discount`, `product_detail`, `product_photo`, `product_photo_bom`) 
VALUES ('$pid','$pname',$pprice,'$qty','$ptype',$ptdc,'$detail','$pic','$pic2')" ;
$result = mysqli_query($connect,$userQuery);
header("Location:03_check-product.php");
?>