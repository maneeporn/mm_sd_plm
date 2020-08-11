<?php
    require_once "config.php";
    $M = $_GET['M'];
    $q = $_GET['q'];
    $vendor = $_GET['vendor'];
    $qty = $_GET['qty'];
    $productID = $_GET['productID'];
    //echo"$test + $productID";
    $userQuery = "INSERT INTO `product_material`(`material_id`, `product_id`,`pm_qty`,`material_use`) 
    VALUES ('$M','$productID',$q,'1')" ;
    $result = mysqli_query($connect,$userQuery);
        header("Location:bom.php?vendor=$vendor&id=$productID&qty=$qty");

    // $c = $_GET['c'];
    // $d = $_GET['d'];
?>