<!DOCTYPE HTML>
<html lang="en">
<?php 
require_once "header.php";
?>

	<div class="slider-main h-400x h-sm-auto pos-relative pt-95 pb-25">
		<div class="img-bg bg-12 bg-layer-4"></div>
		<div class="container-fluid h-50 mt-xs-50">
			<div class="dplay-tbl">
				<div class="dplay-tbl-cell color-white text-center">
				
					<h1 class="ptb-80"><b>customer</b></h1>
					
				</div><!-- dplay-tbl-cell -->
			</div><!-- dplay-tbl -->
		</div><!-- container -->
	</div><!-- slider-main -->
	
	
	<section class="bg-1-white ptb-0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-1">
				</div>


				<div class="col-md-12 col-lg-8 ptb-50 pr-30 pr-md-15">
					<div class="row">
					<?php
								require_once "config.php";
								$userQuery = "SELECT * FROM customer join customer_type using(customer_type_id)" ;
								$result = mysqli_query($connect,$userQuery);
								while ($row = mysqli_fetch_assoc($result))
								{echo"	
										
										<div >
										<h3><b>".$row['customer_id']." : ".$row['customer_fname']." ".$row['customer_lname']."</b></h3>
                                        <h4><b>Ship Address :</b></h4>
                                        <h4>".$row['customer_ship_address']." ".$row['customer_zipcode']."</h4>
                                        <h4><b>Billing Address :</b></h4>
                                        <h4>".$row['customer_billing_address']." ".$row['customer_zipcode']."</h4>
                                        <h4><b>Tel :</b></h4>
                                        <h4>".$row['customer_tel']."</h4>
                                        <h4><b>Email :</b></h4>
                                        <h4>".$row['customer_email']."</h4>
                                        <h4><b>Type : </b>".$row['customer_type_id']." ".$row['customer_type_detail']."</h4>
										<h4><b>Discount : </b>".$row['customer_type_discount']."</h4>
										<a href='updatecustomer.php?id=".$row['customer_id']."'>Update </a><br>
										<a href='deletecustomer.php?id=".$row['customer_id']."'>Delete </a><br> <br> <br>";
								}
								?>
					</div>
				</div>
				</div>
				<form>
				<!-- <INPUT TYPE="button" VALUE="Add Product" onClick="location='addproduct.php'"> -->
				</form>
				</div>

				
	
	
	<!-- SCIPTS -->
	
	<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
	
	<script src="plugin-frameworks/bootstrap.min.js"></script>
	
	<script src="plugin-frameworks/swiper.js"></script>
	
	
	<script src="common/scripts.js"></script>
	
</body>
</html>