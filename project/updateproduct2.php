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
//$pic = $_GET['pic'];
$productID = $_GET['productID'];
//echo $productID ;
$userQuery = "UPDATE `product` SET `product_id`='$pid',`product_name`='$pname',`product_price`= '$pprice',
`product_qty`='$qty',`product_type`='$ptype',`product_discount`='$ptdc',
`product_detail`='$detail' WHERE product_id = '$productID'" ;
$result = mysqli_query($connect,$userQuery);
 header("Location:03_check-product.php");
?>