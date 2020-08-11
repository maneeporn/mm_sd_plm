<?php
session_start();
require_once ("config.php");
$id = $_GET['id'];
$userQuery = "DELETE FROM `customer` WHERE customer_id = '$id' ";
$result = mysqli_query($connect,$userQuery);
header("Location:customer2.php");

?>

