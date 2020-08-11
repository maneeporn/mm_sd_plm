<?php 
    $good_receipt_id = $_GET['receipt_id'];
    if(!isset($_SESSION))
    {
        session_start();
    }
    require_once "config.php";
      
    $userqueryreceipt = "SELECT * FROM applepen.good_receipt join applepen.invoice using (invoice_id) where good_receipt_id ='$good_receipt_id'";
    $queryreceipt = mysqli_query($connect,$userqueryreceipt);
    while ($receipt = mysqli_fetch_assoc($queryreceipt)){
        $invoice_id = $receipt['invoice_id'];  
        $po_id = $receipt['po_id'];
    }
   

    $userquerypr = "SELECT * FROM applepen.purchase_order join applepen.purchase_requisition using (pr_id) where po_id='$po_id'";
    $querypr = mysqli_query($connect,$userquerypr);
    while ($requisition = mysqli_fetch_assoc($querypr)){
        $pr_id = $requisition['pr_id'];
    } 
    

    $userqueryvendor = "SELECT * FROM applepen.purchase_requisition join applepen.vendor using (vendor_id) where pr_id = '$pr_id' ";
	$queryvendor = mysqli_query($connect,$userqueryvendor);
	while ($row = mysqli_fetch_assoc($queryvendor)){
		$vendor_name = $row['vendor_name'];
		$vendor_address = $row['vendor_address'];
		$vendor_tel = $row['vendor_tel'];
		$vendor_email = $row['vendor_email'];
    }

    

	$userquerydetail = "SELECT * from applepen.material join applepen.inventory using (material_id) join applepen.purchase_requisition_detail using (inventory_id) where pr_id ='$pr_id' ";
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
    			<h1>GOODS RECEIPT NOTES</h1><h3 class="pull-right">OUR PO #<?php echo $po_id;?></h3>
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
<b><a href='homemm.php' style='font-size: 0.8em; text-align: center;  display:block;'><h2>BACK</h2></a></b><br>