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

$userQuery = "INSERT INTO `customer`(`customer_type_id`, `customer_fname`, `customer_lname`, `customer_ship_address`, 
`customer_billing_address`, `customer_tel`, `customer_email`) 
VALUES ('$type','$fname','$lname','$address','$address2','$tel','$email')" ;
$result = mysqli_query($connect,$userQuery);
header("Location:home_sd.php");
?>