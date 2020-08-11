<?php

	require_once "config.php";

//customer
$customer_name=$_POST['customer_name'];
$customer_ship_address=$_POST['customer_ship_address'];
$customer_billing_address=$_POST['customer_billing_address'];
$customer_tel=$_POST['customer_tel'];
$customer_email=$_POST['customer_email'];
$customer_type_id=$_POST['customer_type_id'];


$userQuery_inq="insert into  customer (customer_type_id,customer_name,customer_ship_address,customer_billing_address,customer_tel,customer_email)
 VALUES ('$customer_type_id','$customer_name','$customer_ship_address','$customer_billing_address','$customer_tel','$customer_email')";
$result=mysqli_query($connect,$userQuery_inq);


require_once "home_sd.php";
?>
