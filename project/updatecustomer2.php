<?php
session_start();
require_once ("config.php");

$fname = $_GET['fname'];
$lname = $_GET['lname'];
$address = $_GET['address'];
$address2 = $_GET['address2'];
$tel = $_GET['tel'];
$email = $_GET['email'];
$type = $_GET['type'];
$productID = $_GET['productID'];
//echo $productID . " " . $name. " ".$address . " " .$address2 ." ". $tel . " " . $type;
$userQuery = "UPDATE `customer` SET `customer_type_id`= '$type',
`customer_fname`='$fname',`customer_lname`='$lname',`customer_ship_address`='$address',`customer_billing_address`='$address2',
`customer_tel`='$tel',`customer_email`='$email' WHERE customer_id = $productID" ;
$result = mysqli_query($connect,$userQuery);
header("Location:customer2.php");
?>