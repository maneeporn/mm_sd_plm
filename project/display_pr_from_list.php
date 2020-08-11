<?php 
    $pr_id = $_GET['pr_id'];
    if(!isset($_SESSION))
    {
        session_start();
    }

	require_once "config.php";

    
    $userquerypr = "SELECT * FROM applepen.purchase_requisition join applepen.employee using (employee_id) where pr_id = '$pr_id'";
    $querypr = mysqli_query($connect,$userquerypr);
    while ($data = mysqli_fetch_assoc($querypr)){
		$employee_name = $data['employee_name'];
		$department = $data['employee_department'];
		$date = $data['pr_date'];
		$vendor_id = $data['vendor_id'];
		$date_need = $data['pr_dateneed'];
	}

	$userqueryvendor = "SELECT * FROM applepen.purchase_requisition join applepen.vendor using (vendor_id) where vendor_id = '$vendor_id' ";
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


<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>PURCHASE REQUISITION</h2><h3 class="pull-right">PR #<?php echo $pr_id;?></h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
					<br>
					<strong>Requested By:</strong><?php echo " ".$employee_name;?><br>
					<strong>Department:</strong><?php echo " ".$department;?><br>
				</div>
				<div class="col-xs-6 text-right">
					<strong>Order Date:</strong><?php echo " ".$date;?><br>
					<strong>Date Needed:</strong><?php echo " ".$date_need;?><br>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-4">
					<strong>Vendor Name:</strong><?php echo " ".$vendor_name;?><br>
					<strong>Vendor Address:</strong><?php echo " ".$vendor_address;?><br>
					<strong>Vendor E-mail:</strong><?php echo " ".$vendor_email;?><br>
					<strong>Vendor Tel:</strong><?php echo " ".$vendor_tel;?><br><br><br>
    			</div>
    			
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Purchase Requisition Details</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Material ID</strong></td>
        							<td class="text-center"><strong>Material Name</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-right"><strong>Unit Price</strong></td>
                                </tr>
							</thead>
							<tbody>
							<?php while ($detail = mysqli_fetch_assoc($querydetail)){  
							
							echo"<tr><td>".$detail['material_id']."</td>
    								<td class=\"text-center\">".$detail['material_name']."</td>
    								<td class=\"text-center\">".$detail['pr_qty']."</td>
    								<td class=\"text-right\">".$detail['material_price']."</td></tr>";
							} ?>
							</tbody>
    					</table>
    				</div>
				</div>
			</div>
    	</div>
    </div>
</div>

<b><a href='homemm.php' style='font-size: 0.8em; text-align: center;  display:block;'><h2>BACK</h2></a></b><br>
