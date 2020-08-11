<!DOCTYPE HTML>
<html lang="en">
<?php 
require_once "header.php";
?>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
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
		<br>
		<center><h1>Add product</h1></center>
		<br>

		<div class="container">
		<form action="addproduct2.php" medthod="GET">

			<div class="row">
			<div class="col-25">
				<label for="pid">Product ID</label>
			</div>
			<div class="col-75">
				<input type="text" name="pid" placeholder="Product ID..">
			</div>
			</div>

			<div class="row">
			<div class="col-25">
				<label for="pname">Product Name</label>
			</div>
			<div class="col-75">
				<input type="text" name="pname" placeholder="Product name..">
			</div>
			</div>

			<div class="row">
			<div class="col-25">
				<label for="pprice">Product Price</label>
			</div>
			<div class="col-75">
				<input type="text" name="pprice" placeholder="Product Price..">
			</div>
			</div>

			<div class="row">
			<div class="col-25">
				<label for="qty">Product Quantity</label>
			</div>
			<div class="col-75">
				<input type="number" name="qty" min = "0" >
			</div>
			</div>

			<div class="row">
			<div class="col-25">
				<label for="ptype">Product Type</label>
			</div>
			<div class="col-75">
				<input type="text" name="ptype" placeholder="Product Type..">
			</div>
			</div>

			<div class="row">
			<div class="col-25">
				<label for="pdc">Product Discount</label>
			</div>
			<div class="col-75">
				<input type="text" name="ptdc" placeholder="Product discount..">
			</div>
			</div>

			<div class="row">
			<div class="col-25">
				<label for="detail">Product Detail</label>
			</div>
			<div class="col-75">
				<textarea id="subject" name="detail" placeholder="Write something.." style="height:200px"></textarea>
			</div>
			</div>

			<div class="row">
			<div class="col-25">
				<label for="pic">Product Photo</label>
			</div>
			<div class="col-75">
				<input type="file" name="pic" >
			</div>
			</div>

			<div class="row">
			<div class="col-25">
				<label for="pic">Product Photo BOM</label>
			</div>
			<div class="col-75">
				<input type="file" name="pic2" >
			</div>
			</div>

			<div class="row">
			<input type="submit" value="Submit">
			</div>
		</form>
		</div>

		<?php 
require_once "footer.php";
?>	
	
	
	
	<!-- SCIPTS -->
	
	
	<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
	
	<script src="plugin-frameworks/bootstrap.min.js"></script>
	
	<script src="plugin-frameworks/swiper.js"></script>
	
	<script src="common/scripts.js"></script>

	<script language="javascript" src="js/jquery-1.4.1.min.js"></script>
	
</body>
</html>