<?php
	session_start();
	require_once "config.php";

    mysqli_query($connect,"SET NAMES utf8");
    
    $shipvia = $_SESSION['ShipVia'];
    
    $userquerypo = "SELECT * FROM applepen.purchase_order ORDER BY po_id DESC LIMIT 1";
    $querypo = mysqli_query($connect,$userquerypo);
    while ($po = mysqli_fetch_assoc($querypo)){
        $po_id = $po['po_id'];
        $total = $po['po_total'];
    }
 
    $userqueryinvoice = "insert into applepen.invoice (po_id,invoice_total) VALUES ('$po_id','$total')";
    $queryinvoice = mysqli_query($connect,$userqueryinvoice);
       
    if(isset($queryinvoice)){
        require_once "display_receipt_of_goods.php";
    }
   
    
?>


    
    
    
 


