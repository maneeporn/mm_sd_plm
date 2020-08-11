<?php
session_start();
require_once "config.php";
$id = $_GET['id'];
// echo $id ;

// $userquery="select * from document_sd join doc_sd_type using(doc_sd_type_id) join customer using (customer_id) 
// join company using (company_id) join employee using (employee_id) where doc_id = $id";
// $row = mysqli_fetch_assoc($result);
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>INQUIRY</h2><h3 class="pull-right">Order # <?php echo $id ; ?></h3><br>
    		</div>
    		<hr>
    		<div class="row">
    			<!-- <div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
    					John Smith<br>
    					1234 Main<br>
    					Apt. 4B<br>
    					Springfield, ST 54321
    				</address>
    			</div> -->
    			<div class="invoice-title">
    				
                        <?php 
                        session_start();
                        require_once "config.php";
                        $userQuery = "SELECT * FROM `document_sd` join customer using (customer_id) WHERE `doc_id` = $id" ;
						$result = mysqli_query($connect,$userQuery);
						while ($row = mysqli_fetch_assoc($result))
						{
                            echo "<h4 align = 'right'>".$row['customer_name']."</h4>
                            <h5 align = 'right'>".$row['customer_billing_address']."</h5>
                            <h5 align = 'right'>Tel : ".$row['customer_tel']."</h5>
                            <h5 align = 'right'>Email : ".$row['customer_email']."</h5><br>
                            ";
                        }
                        ?>
    				
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6 ">
    				<address>
    					<strong>Order Date:</strong><br>
    					<?php 
                        session_start();
                        require_once "config.php";
                        $userQuery = "SELECT * FROM `document_sd` join employee using (employee_id) WHERE `doc_id` = $id" ;
						$result = mysqli_query($connect,$userQuery);
						while ($row = mysqli_fetch_assoc($result))
						{
                            echo "
                            <h5 align = 'left'>".$row['doc_date']."</h5>
                            <strong>To ".$row['employee_name'].":</strong>
                            <h5 align = 'left'>".$row['description']."</h5>

                            ";
                        }
                        ?>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Item list</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<!-- <td><strong>Item</strong></td> -->
                                    <td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-center"><strong>Item</strong></td>
        							<td class="text-center"><strong>Material Number</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
                                <?php 
                        session_start();
                        require_once "config.php";
                        $userQuery = "SELECT * FROM `document_sd` join item_list using (doc_id) join product using (product_id) WHERE `doc_id` = $id" ;
						$result = mysqli_query($connect,$userQuery);
						while ($row = mysqli_fetch_assoc($result))
						{
                            echo "<tr>
    								<td class='text-center'>".$row['quantity']."</td>
    								<td class='text-center'>".$row['product_name']."</td>
    								<td class='text-center'>".$row['product_id']."</td>
    							</tr>
                            

                            ";
                        }
                        ?>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>

