<?php 
    if(!isset($_SESSION))
    {
        session_start();
    }
    require_once "config.php";
                                        
    $querypr_id = "SELECT * FROM applepen.purchase_requisition join applepen.employee using (employee_id)ORDER BY pr_id DESC LIMIT 1";
    $purchase_id = mysqli_query($connect,$querypr_id);
    while ($pr_id = mysqli_fetch_assoc($purchase_id)){
        $pr_idd = $pr_id['pr_id'];
        
    }
    $querypo_id = "SELECT * FROM applepen.purchase_order ORDER BY po_id DESC LIMIT 1";
    $purchase_order_id = mysqli_query($connect,$querypo_id);
    while ($po_id = mysqli_fetch_assoc($purchase_order_id)){
        $po_idd = $po_id['po_id'];
    }

    $userqueryvendor = "SELECT * FROM applepen.purchase_requisition join applepen.vendor using (vendor_id) where pr_id = '$pr_idd' ";
	$queryvendor = mysqli_query($connect,$userqueryvendor);
	while ($row = mysqli_fetch_assoc($queryvendor)){
		$vendor_name = $row['vendor_name'];
		$vendor_address = $row['vendor_address'];
		$vendor_tel = $row['vendor_tel'];
		$vendor_email = $row['vendor_email'];
    }

    $userqueryinvoice= "SELECT * FROM applepen.invoice where po_id = '$po_idd'";
    $queryinvoice = mysqli_query($connect,$userqueryinvoice);
    while ($invoice = mysqli_fetch_assoc($queryinvoice)){
		$invoice_id = $invoice['invoice_id'];
	}

	$userquerydetail = "SELECT * from applepen.material join applepen.inventory using (material_id) join applepen.purchase_requisition_detail using (inventory_id) where pr_id ='$pr_idd' ";
	$querydetail = mysqli_query($connect,$userquerydetail);

?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<br>

<style>
    p{
        margin: 0;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title text-right">
    			<h1>GOODS RECEIPT NOTES</h1><h3 class="pull-right">OUR PO #<?php echo $po_idd;?></h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-4">
                <h4><?php echo$vendor_name;?></h4>
                    <b><?php echo "Address : </b>".$vendor_address;?></b>
                    <p><?php echo "<b>E-mail : </b>".$vendor_email;?></p>
                    <p><?php echo "<b>Tel : </b>".$vendor_tel;?></p>
				</div>
				<div class="col-xs-8 text-right">
                    <strong>Date:</strong><?php echo date("d/m/Y") ;?><br>
                    <strong>Invoice no:</strong><?php echo $invoice_id ;?><br>
    			</div>
    		</div>
    	</div>
    </div>
    <br><br>
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td class="text-left"><strong>MATERIAL ID</strong></td>
        							<td class="text-center"><strong>MATERIAL NAME</strong></td>
                                    <td class="text-center"><strong>QTY</strong></td>
                                    <td class="text-center"><strong>QTY RECEIVED </strong></td>
                                    <td class="text-center"><strong>UNIT PRICE</strong></td>
                                    <td class="text-right"><strong>TOTAL</strong></td>
                                </tr>
							</thead>
							<tbody>

							<?php while ($detail = mysqli_fetch_assoc($querydetail)){  
                            echo"<tr>
                                    <td class=\"text-left\">".$detail['material_id']."</td>
    								<td class=\"text-center\">".$detail['material_name']."</td>
                                    <td class=\"text-center\">".$detail['pr_qty']."</td>
                                    <td class=\"text-center\">".$detail['pr_qty']."</td>
                                    <td class=\"text-center\">".$detail['material_price']."</td>
                                    <td class=\"text-right\">".($detail['material_price']*$detail['pr_qty'])."</td></tr>";
							} ?>
							</tbody>
    					</table>
    				</div>
				</div>
			</div>
        </div>
    </div>
</div>
<?php 
    $queryreceiptofgoods = "insert into applepen.good_receipt (invoice_id) VALUES ('$invoice_id')";
    $receiptofgoods = mysqli_query($connect,$queryreceiptofgoods); 
?>
<br><br><b><a href='update_stock.php' style='font-size: 0.8em; text-align: center;  display:block;'><h4>RECEIPTE OF GOODS SUCCESSS</h4></a></b><br>