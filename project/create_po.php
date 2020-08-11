<?php 
    if(!isset($_SESSION))
    {
        session_start();
    }
	require_once "config.php";

    
    $shipvia = $_SESSION['ShipVia'];
 

    $querypr_id = "SELECT * FROM purchase_requisition ORDER BY pr_id DESC LIMIT 1";
    $purchase_id = mysqli_query($connect,$querypr_id);
    while ($pr = mysqli_fetch_assoc($purchase_id)){
        $pr_id = $pr['pr_id'];
    }

    $userquerypo = "insert into purchase_order (po_total,pr_id,po_date)VALUES ('0','$pr_id',now())";
    $querypo = mysqli_query($connect,$userquerypo);
    //print_r($querypo);
    
    if(isset($querypo)){
        require_once "display_po.php";
    }

	

	

?>

