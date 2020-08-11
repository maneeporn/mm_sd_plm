<!DOCTYPE HTML>
<html lang="en">
<?php 
require_once "header.php";
?>
	<style type="text/css">
div.img-resize img {
	width: 300px;
	height: auto;
}

div.img-resize {
	width: 300px;
	height: 300px;
	overflow: hidden;
	text-align: center;
}
</style>
	
	<div class="slider-main h-400x h-sm-auto pos-relative pt-95 pb-25">
		<div class="img-bg bg-12 bg-layer-4"></div>
		<div class="container-fluid h-50 mt-xs-50">
			<div class="dplay-tbl">
				<div class="dplay-tbl-cell color-white text-center">
				
					<h1 class="ptb-80"><b>PRODUCT</b></h1>
					
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
								$userQuery = "SELECT * FROM product" ;
								$result = mysqli_query($connect,$userQuery);
								while ($row = mysqli_fetch_assoc($result))
								{echo"	
										
										<div >
										<div class='img-resize'><img src=image/".$row['product_photo']."></div>
										<h3><b>".$row['product_id']." ".$row['product_name']."</b></h3>
										<h4>".$row['product_detail']."</h4>
										<h3>Inventory :  ".$row['product_qty']." </h3></br>
										<a href='updateproduct.php?id=".$row['product_id']."'>Update ".$row['product_name']."</a><br>
										<a href='deleteproduct.php?id=".$row['product_id']."'>Delete ".$row['product_name']."</a><br> <br> ";
								}
								?>
					</div>
				</div>
				</div>
				<form>
				<INPUT TYPE="button" VALUE="Add Product" onClick="location='addproduct.php'">
				</form>
				</div>

				
	
	
	<!-- SCIPTS -->
	
	<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
	
	<script src="plugin-frameworks/bootstrap.min.js"></script>
	
	<script src="plugin-frameworks/swiper.js"></script>
	
	
	<script src="common/scripts.js"></script>
	
</body>
</html>