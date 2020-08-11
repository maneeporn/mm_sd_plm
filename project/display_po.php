<?php 
    if(!isset($_SESSION))
    {
        session_start();
    }
    require_once "config.php";

    $total =0;
    $datenow = date("Y/m/d");
    $shipvia = $_SESSION['ShipVia'];
    
    $querypo ="SELECT * from purchase_order order by po_id LIMIT 1";
	$po = mysqli_query($connect,$querypo);
	while ($p = mysqli_fetch_assoc($po)){
		$po_id = $p['po_id'];
		$pr_id = $p['pr_id'];
	}

    $querypr_id = "SELECT * FROM applepen.purchase_requisition join applepen.employee using (employee_id)ORDER BY pr_id DESC LIMIT 1";
    $purchase_id = mysqli_query($connect,$querypr_id);
    while ($pr_id = mysqli_fetch_assoc($purchase_id)){
        $pr_idd = $pr_id['pr_id'];
        $employee_name = $pr_id['employee_name'];
        
    }

    $querypo_id = "SELECT * FROM applepen.purchase_order ORDER BY po_id DESC LIMIT 1";
    $purchase_order_id = mysqli_query($connect,$querypo_id);
    while ($po_id = mysqli_fetch_assoc($purchase_order_id)){
        $po_idd = $po_id['po_id'];
        
    }
    //print_r($querypo_id);

    $userquerycompany= "SELECT * FROM applepen.company where company_id = '1'";
    $querycompany = mysqli_query($connect,$userquerycompany);
    while ($company = mysqli_fetch_assoc($querycompany)){
		$company_name = $company['company_name'];
		$company_address = $company['company_address'];
		$company_zipcode = $company['company_zipcode'];
		$company_tel = $company['company_tel'];
        $company_email = $company['company_email'];
        $company_fax = $company['company_fax'];
	}

	$userqueryvendor = "SELECT * FROM applepen.purchase_requisition join applepen.vendor using (vendor_id) where pr_id = '$pr_idd' ";
	$queryvendor = mysqli_query($connect,$userqueryvendor);
	while ($row = mysqli_fetch_assoc($queryvendor)){
		$vendor_name = $row['vendor_name'];
		$vendor_address = $row['vendor_address'];
		$vendor_tel = $row['vendor_tel'];
		$vendor_email = $row['vendor_email'];
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
    			<h1>PURCHASE ORDER</h1><h3 class="pull-right">PO #<?php echo $po_idd;?></h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-4">
					<h2><?php echo$company_name;?></h2><br>
                    <b><?php echo "Address : </b>".$company_address." ".$company_zipcode;?></b>
                    <p><?php echo "<b>E-mail : </b>".$company_email;?></p>
                    <p><?php echo "<b>Tel : </b>".$company_tel;?></p>
                    <p><?php echo "<b>Fax : </b>".$company_fax;?></p>
				</div>
				<div class="col-xs-8 text-right">
					<strong>Date:</strong><?php echo " ".date("d/m/Y");?><br>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-4">
                    <br>
                    <h3>VENDOR</h3>
					<h4><?php echo$vendor_name;?></h4>
                    <b><?php echo "Address : </b>".$vendor_address;?></b>
                    <p><?php echo "<b>E-mail : </b>".$vendor_email;?></p>
                    <p><?php echo "<b>Tel : </b>".$vendor_tel;?></p>
                </div>
                <div class="col-xs-4">
                </div>
				<div class="col-xs-4 text-right">
                    <br>
                    <h3>SHIP TO</h3>
                    <h4><?php echo$vendor_name;?></h4>
                    <b><?php echo "Address : </b>".$vendor_address;?></h3>
                    <p><?php echo "<b>E-mail : </b>".$vendor_email;?></p>
                    <p><?php echo "<b>Tel : </b>".$vendor_tel;?></p>
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
    					<table class="table table-condensed panel-title">
    						<thead>
                                <tr>
        							<td><strong>REQUISITIONER</strong></td>
        							<td class="text-center"><strong>SHIP VIA</strong></td>
        							<td class="text-center"><strong>F.O.B</strong></td>
        							<td class="text-right"><strong>SHIPPING TERMS</strong></td>
                                </tr>
							</thead>
							<tbody>
							<?php
							echo"<tr><td>".$employee_name."</td>
    								<td class=\"text-center\">".$shipvia."</td>
    								<td class=\"text-center\"> Destination </td>
    								<td class=\"text-right\"> Net30 </td></tr>";
							 ?>
							</tbody>
    					</table>
    				</div>
				</div>
			</div>
    	</div>
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td class="text-left"><strong>Material ID</strong></td>
        							<td class="text-center"><strong>Material Name</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
                                    <td class="text-center"><strong>Unit Price</strong></td>
                                    <td class="text-right"><strong>Total</strong></td>
                                </tr>
							</thead>
							<tbody>

							<?php while ($detail = mysqli_fetch_assoc($querydetail)){  
                            echo"<tr>
                                    <td class=\"text-left\">".$detail['material_id']."</td>
    								<td class=\"text-center\">".$detail['material_name']."</td>
    								<td class=\"text-center\">".$detail['pr_qty']."</td>
                                    <td class=\"text-center\">".$detail['material_price']."</td>
                                    <td class=\"text-right\">".($detail['material_price']*$detail['pr_qty'])."</td></tr>";
                                    $total=$total+($detail['material_price']*$detail['pr_qty']);
							} ?>
							</tbody>
    					</table>
    				</div>
				</div>
			</div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8">
        </div>
        <div class="col-xs-2 text-left">
        <br>
            <p><?php echo "SUBTOTAL";?></p>
            <p><?php echo "TAX";?></p>
            <p><?php echo "SHIPPING";?></p>
            <p><?php echo "OTHER";?></p>
            <p style ='border-size:1px;'>
            <i><?php echo "<b>TOTAL</b>";?><i>
        </div>
        <div class="col-xs-2 text-right">
            <br>
            <p><?php echo $total;?></p>
            <p><?php echo "-";?></p>
            <p><?php echo "-";?></p>
            <p><?php echo "-";?></p>
            <p><?php echo $total;?></p>
        </div>
    </div>
</div>
<?php 
    $queryupdate_po = "UPDATE applepen.purchase_order SET po_total = '$total', po_date = '$datenow' where po_id = '$po_idd'";
    $update_po = mysqli_query($connect,$queryupdate_po); 
?>
<b  style='font-size: 0.8em; text-align: center; display:block; margin-top:50px'><h4>If you have any question about this purchase order, please contact<br>[ Name , Phone , E-mail ]</h4></b><br><br>
<b><a href='success_po.php' style='font-size: 0.8em; text-align: center;  display:block;'><h3>SEND PURCHASE ORDER TO VENDOR</h3></a></b><br>