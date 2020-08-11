<?php 
    if(!isset($_SESSION))
    {
        session_start();
    }
    require_once "config.php";
                                        
    $userquerypo = "SELECT * FROM applepen.invoice join applepen.purchase_order using (po_id) ORDER BY invoice_id DESC LIMIT 1";
    $purchase_order = mysqli_query($connect,$userquerypo);
    while ($po = mysqli_fetch_assoc($purchase_order)){
        $po_id = $po['po_id'];

    }
    $userquerypr = "SELECT * FROM applepen.purchase_order join applepen.purchase_requisition using (pr_id)  where po_id ='$po_id'";
    $purchase_requisition = mysqli_query($connect,$userquerypr);
    while ($pr = mysqli_fetch_assoc($purchase_requisition)){
        $pr_id = $pr['pr_id'];
    }
    //print_r($userquerypr);

    $userquerypr_detail = "SELECT * FROM applepen.purchase_requisition join applepen.purchase_requisition_detail using  (pr_id)  join applepen.inventory using(inventory_id)  where pr_id ='$pr_id'";
    //print_r($userquerypr_detail);
    $querypr_detail = mysqli_query($connect,$userquerypr_detail);
	while ($detail = mysqli_fetch_assoc($querypr_detail)){
        $qty = $detail['pr_qty'];
        $inventory_id = $detail['inventory_id'];
		$userupdatestock = "UPDATE applepen.inventory SET material_stock = (material_stock+'$qty') where inventory_id ='$inventory_id'";
        $updatestock = mysqli_query($connect,$userupdatestock);
    }

    //print_r($userupdatestock);
    if(isset($updatestock)){
        require_once "add_good_receipt.php";
    }
?>