<?php
    require_once "config.php";
    $Mchange = $_GET['Mchange'];
    $Mid = $_GET['Mid'];
    $Mname = $_GET['Mname'];
    $Mto = $_GET['type'];
    $q = $_GET['q'];
    $productID = $_GET['productID'];
    $ver = $_GET['ver'];
    $price = $_GET['price'];
    $stock = $_GET['stock'];
    $vendornew = $_GET['vendornew'];
    $vendor = $_GET['vendor'];
	$qty = $_GET['qty'];
    //echo"$test + $productID";
    $userQuery = "INSERT INTO `material`(`material_id`, `material_name`, `material_type`, `material_version`) 
    VALUES ('$Mid','$Mname','$Mto',$ver)" ;
    $result = mysqli_query($connect,$userQuery);

    $userQuery = "INSERT INTO `product_material`(`material_id`, `product_id`, `pm_qty`, `material_use`) 
    VALUES ('$Mid','$productID',$q,1)" ;
    $result = mysqli_query($connect,$userQuery);

    $userQuery = "INSERT INTO `inventory`(`vendor_id`, `material_id`, `material_stock`, `material_price`) 
    VALUES ($vendornew,'$Mid',$stock,$price)" ;
    $result = mysqli_query($connect,$userQuery);

    $userQuery = "UPDATE `product_material` SET `material_use`= 0 WHERE `material_id`= '$Mchange' and `product_id`= '$productID'" ;
    $result = mysqli_query($connect,$userQuery);

    header("Location:bom.php?vendor=$vendor&id=$productID&qty=$qty");

   
?>