<?php
    require_once "config.php";
    $vendor = $_GET['vendor'];
    $quantity = $_GET['quantity'];
    $unit = $_GET['unit'];
    $material_id = $_GET['material_id'];
    $description = $_GET['description'];
    $productID = $_GET['productID'];
    $price = $_GET['price'];
    $stock = $_GET['stock'];
    //echo"$test + $productID";
    $userQuery = "INSERT INTO `material`(`material_id`, `material_name`, `material_type`, `material_version`) 
    VALUES ('$material_id','$description','$unit',1)" ;
    $result = mysqli_query($connect,$userQuery);

    $userQuery = "INSERT INTO `inventory`( `vendor_id`, `material_id`, `material_stock`, `material_price`) 
    VALUES ($vendor,'$material_id ','$stock','$price')" ;
    $result = mysqli_query($connect,$userQuery);
        header("Location:03_check-material.php");

    
?>