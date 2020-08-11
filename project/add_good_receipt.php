<?php
	if(!isset($_SESSION))
    {
        session_start();
    }
	require_once "config.php";
    
    $shipvia = $_SESSION['ShipVia'];
    
    $userqueryinvoice = "SELECT * FROM applepen.invoice ORDER BY invoice_id DESC LIMIT 1";
    $queryinvoice = mysqli_query($connect,$userqueryinvoice);
    while ($invoice = mysqli_fetch_assoc($queryinvoice)){
        $invoice_id = $invoice['invoice_id'];
    }
 
    $userquerygoods = "insert into applepen.good_receipt (invoice_id)VALUES ('$invoice_id')";
    $querygoods = mysqli_query($connect,$userquerygoods);
       
    if(isset($querygoods)){
        require_once "display_invoice.php";
    }
   
    
?>


    
    
    
 


