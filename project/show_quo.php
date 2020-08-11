<?php
session_start();
require_once "config.php";
$id = $_GET['id'];
$ref_id = $_GET['ref_id'];

//echo $ref_id ;

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
				<h2>QUOTATION</h2>
				<h3 class="pull-right">refer to which Inquiry # <?php echo $ref_id ; ?></h3><br><br><br>
				<h4 class="pull-right">Quotation ID # <?php echo $ref_id ; ?></h4><br>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
                    <?php 
                        session_start();
                        require_once "config.php";
                        $userQuery = "SELECT * FROM `document_sd` join company using (company_id) WHERE `doc_id` = $id" ;
						$result = mysqli_query($connect,$userQuery);
						while ($row = mysqli_fetch_assoc($result))
						{
                            echo "<h4 align = 'left'>".$row['company_name']."</h4>
                            <h5 align = 'left'>".$row['company_address']."</h5>
                            <h5 align = 'left'>Tel : ".$row['company_tel']."</h5>
                            <h5 align = 'left'>Email : ".$row['company_email']."</h5><br>
                            ";
                        }
                        ?>
    			</div>
    			<div class="col-xs-6 text-right">
    					<?php 
                        session_start();
                        require_once "config.php";
                        $userQuery = "SELECT * FROM `document_sd` join employee using (employee_id) WHERE `doc_id` = $id" ;
						$result = mysqli_query($connect,$userQuery);
						while ($row = mysqli_fetch_assoc($result))
						{
                            echo "
                            <h5 align = 'right'>Date : ".$row['doc_date']."</h5>
                            <h5 align = 'right'>EXP Date : ".$row['exp_date']."</h5>

                            ";
                        }
                        ?>
    				
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
									<!-- <td><strong>Item</strong></td> -->
									<td class="text-center"><strong>saleperson</strong></td>
									<td class="text-center"><strong>Customer ID</strong></td>
        							<td class="text-center"><strong>payment terms</strong></td>
        							<!-- <td class="text-center"><strong>Material Number</strong></td> -->
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
                                <?php 
                        session_start();
                        require_once "config.php";
                        $userQuery = "SELECT * FROM `document_sd` join customer using (customer_id) join employee using (employee_id) WHERE `doc_id` = $id" ;
						$result = mysqli_query($connect,$userQuery);
						while ($row = mysqli_fetch_assoc($result))
						{
							echo "<tr>
									<td class='text-center'>".$row['employee_name']."</td>
									<td class='text-center'>".$row['customer_id']."</td>
    								<td class='text-center'>".$row['term']."</td>
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
                            $userQuery = "SELECT * FROM `document_sd` join company using(company_id) join customer using (customer_id) join customer_type using (customer_type_id) WHERE doc_id = $id" ;
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
									<td class='thick-line'></td>
                                    <td class='thick-line'></td>
                                    <td class='thick-line'></td>
                                    <td class='thick-line'></td>
                                    <td class='thick-line text-center'><strong>Discount customer</strong></td>
                                    <td class='thick-line text-center'>".$row['customer_type_discount']."</td>
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
                        <br><br><br><br><br><br>
                        <center>Thank you for your business!</center>
                        <br><br><br><br><br><br><br><br>
    </div>
</div>

