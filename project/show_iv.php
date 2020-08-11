<?php
session_start();
require_once "config.php";
$id = $_GET['id'];
$ref_id = $_GET['ref_id'];

?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>INVOICE</h2>
				<h3 class="pull-right">invoice id : <?php echo $id ; ?></h3><br><br><br>
				<?php 
                        session_start();
                        require_once "config.php";
                        $userQuery = "SELECT * FROM `document_sd` WHERE `doc_id` = $id" ;
						$result = mysqli_query($connect,$userQuery);
						while ($row = mysqli_fetch_assoc($result))
						{
							echo "<h4 align = 'right'> invoice date : ".$row['doc_date']."</h4>
							<h4 align = 'right'> customer id : ".$row['customer_id']."</h4>
                            ";
                        }
                        ?>
    		</div>
    		<hr>
            <div class="row">
    			<div class="col-xs-6 ">
    				<address>
                        <?php 
                        session_start();
                        require_once "config.php";
                        $userQuery = "SELECT * FROM `document_sd` join company using (company_id) WHERE `doc_id` = $id" ;
						$result = mysqli_query($connect,$userQuery);
						while ($row = mysqli_fetch_assoc($result))
						{
							echo "<h3 align = 'left'>".$row['company_name']."</h3>
							<h4 align = 'left'>".$row['company_address']."</h4>
                            ";
                        }
                        ?>
    					
                        
    				</address>
    			</div>
    		</div>
    		<div class="row">
            <div class="col-xs-6">
    				<address>
    				<strong>Bill To:</strong><br>
    				<?php 
                        session_start();
                        require_once "config.php";
                        $userQuery = "SELECT * FROM `document_sd` join customer using (customer_id) WHERE `doc_id` = $id" ;
						$result = mysqli_query($connect,$userQuery);
						while ($row = mysqli_fetch_assoc($result))
						{
                            echo $row['customer_name']."<br>"
                            .$row['customer_billing_address']."<br>
                            tel : ".$row['customer_tel']."<br>
                            email : ".$row['customer_email']."<br>";
                        }
                        ?>
    				</address>
    			</div>
    			<div class="col-xs-6 text-lift">
    				<address>
                    <strong>Ship To:</strong><br>
                    <?php 
                        session_start();
                        require_once "config.php";
                        $userQuery = "SELECT * FROM `document_sd` join customer using (customer_id) WHERE `doc_id` = $id" ;
						$result = mysqli_query($connect,$userQuery);
						while ($row = mysqli_fetch_assoc($result))
						{
                            echo $row['customer_name']."<br>"
                            .$row['customer_ship_address']."<br>
                            tel : ".$row['customer_tel']."<br>
                            email : ".$row['customer_email']."<br>";
                        }
                        ?>
                        </address>
    			</div>
    		
    	</div>
    </div>
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
									<td class="text-center"><strong>Date</strong></td>
									<td class="text-center"><strong>PO ID</strong></td>
									<td class="text-center"><strong>Our Order</strong></td>
									<td class="text-center"><strong>Sale Rep. </strong></td>
        							<!-- <td class="text-center"><strong>Shipped VIA</strong></td> -->
									<td class="text-center"><strong>Terms</strong></td>
									<td class="text-center"><strong>Customer ID</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
                                <?php 
                        session_start();
                        require_once "config.php";
                        $userQuery = "SELECT * FROM `document_sd` join employee using (employee_id) WHERE `doc_id` = $id" ;
						$result = mysqli_query($connect,$userQuery);
						while ($row = mysqli_fetch_assoc($result))
						{
                            echo "<tr>
									<td class='text-center'>".$row['doc_date']."</td>
									<td class='text-center'>".$ref_id."</td>
									<td class='text-center'>".$row['doc_id']."</td>
									<td class='text-center'>".$row['employee_name']."</td>
									<td class='text-center'>".$row['term']."</td>
									<td class='text-center'>".$row['customer_id']."</td>
									
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
        							<td class="text-center"><strong>Description</strong></td>
									<td class="text-center"><strong>Discount</strong></td>
        							<td class="text-center"><strong>Unit Price(THB)</strong></td>
                                    <td class="text-center"><strong>Line Total(THB)</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
                                <?php 
                        session_start();
                        require_once "config.php";
                        $userQuery = "SELECT * FROM `item_list` join product USING (product_id) WHERE `doc_id` = $ref_id" ;
						$result = mysqli_query($connect,$userQuery);
						while ($row = mysqli_fetch_assoc($result))
						{
                            $total = $row['quantity'] * $row['product_price'];
							$discount = $total * $row['product_discount'];
							$total2 = $total - $discount;
                            $sum += $total2;
                            echo "<tr>
									<td class='text-center'>".$row['quantity']."</td>
									<td class='text-center'>".$row['product_id']."</td>
									<td class='text-center'>".$row['product_name']."</td>
									<td class='text-center'>".$row['product_discount']."</td>
									<td class='text-center'>".$row['product_price']."</td>
									<td class='text-center'>".$total2."</td>
                                </tr>";
                            
                        }
                        echo"
								<tr>
								<td class='thick-line'></td>
    								<td class='thick-line'></td>
    								<td class='thick-line'></td>
    								<td class='thick-line'></td>
    								<td class='thick-line text-center'><strong>Total</strong></td>
    								<td class='thick-line text-center'>$sum</td>
                                </tr>
                            ";
                            $userQuery = "SELECT * FROM `document_sd` join company using(company_id) WHERE doc_id = $id" ;
                            $result = mysqli_query($connect,$userQuery);
                            while ($row = mysqli_fetch_assoc($result))
                            {
                        echo"
									<tr>
									<td class='thick-line'></td>
                                    <td class='thick-line'></td>
                                    <td class='thick-line'></td>
                                    <td class='thick-line'></td>
                                    <td class='thick-line text-center'><strong>Discount</strong></td>
                                    <td class='thick-line text-center'>".$row['discount']."</td>
                                </tr>
								<tr>
								<td class='no-line'></td>
    								<td class='no-line'></td>
    								<td class='no-line'></td>
    								<td class='no-line'></td>
    								<td class='no-line text-center'><strong>Tax</strong></td>
    								<td class='no-line text-center'>".$row['company_tax']."</td>
    							</tr>
								<tr>
								<td class='no-line'></td>
    								<td class='no-line'></td>
    								<td class='no-line'></td>
    								<td class='no-line'></td>
    								<td class='no-line text-center'><strong>Net Total</strong></td>
                                    <td class='no-line text-center'>".$row['net_total']."</td>
                                    ";
                            }

                        ?>
    						</tbody>
    					</table>
                        
    				</div>
    			</div>
    		</div>
    	</div>
        <?php 
                        session_start();
                        require_once "config.php";
                        $userQuery = "SELECT * FROM `document_sd` WHERE `doc_id` = $id" ;
						$result = mysqli_query($connect,$userQuery);
						while ($row = mysqli_fetch_assoc($result))
						{
                            echo "
    								<h4>".$row['description']."</h4>
                            ";
                        }
                        ?>
                        <br><br><br><br><br><br><br><br>
    </div>
                        <br><br><br><br><br><br><br><br>
    </div>
</div>

