<?php
require_once "config.php";
	$userquery="SELECT * FROM product ";
	$result=mysqli_query($connect,$userquery);
	if (!$result)
	{
	die ("ERROR: Cannot connect to the database(run the query $userquery)".mysqli_error($connect));
	}
	if (mysqli_num_rows($result)==0)
	{
	echo "on record word were found with query $userquery";
	}
	$userquery1="SELECT doc_id FROM document_sd";
	$result1=mysqli_query($connect,$userquery1);
?>



<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Quite Light</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">

	<!-- Stylesheets -->

	<link href="plugin-frameworks/bootstrap.min.css" rel="stylesheet">
	<link href="plugin-frameworks/swiper.css" rel="stylesheet">

	<link href="fonts/ionicons.css" rel="stylesheet">


	<link href="common/styles.css" rel="stylesheet">


</head>
<body>



	<div class="slider-main h-500x h-sm-auto pos-relative pt-95 pb-25">
		<div class="img-bg bg-1 bg-layer-4"></div>
		<div class="container-fluid h-100 mt-xs-50">
			<div class="dplay-tbl">
				<div class="dplay-tbl-cell color-white text-center">

					<h1 class="ptb-50"><b>List Item</b></h1>

				</div><!-- dplay-tbl-cell -->
			</div><!-- dplay-tbl -->
		</div><!-- container -->
	</div><!-- slider-main -->


	<section class="bg-1-white ptb-70 ptn-sm-50">
		<div class="container">
			<div class="row">
				<div class="col-xl-2"></div>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">


						<form class="form-block form-h-55 form-plr-20 form-bg-white text-center" action="add-itemlist.php" method="post">
						<div class="row">
							<div class="col-sm-6 mb-30">
<!-- form -->

										<table align = "center">
											<tr><th>Product ID</th><th>Product</th><th>Quantity</th></tr>

											 <?php

											 while(	$product = mysqli_fetch_assoc($result)){
												 echo "<tr>";
												  printf("<td>%s</td>",$product['product_id']);
													echo "<input name=\"product_id[]\" value=\"{$product['product_id']}\" type=\"hidden\">";
													echo "<input name=\"product_price[]\" value=\"{$product['product_price']}\" type=\"hidden\">";
												 	printf("<td>%s</td>",$product['product_name']);
													printf("<td><input type=\"number\" placeholder=\"qty\" name=\"qty[]\"></td>");
												 echo "</tr>";
											 }

											 ?>

										</table>
										<h4 id="subject" name="description" style="height:200px"><br><br>Discount : Promotion if you buy my products ,Product total is more than 50,000 bath. You will given discount 10% from Product total.</h4>




							</div><!-- col-sm-12-->

						</div>		<!-- row-->
						<input  type="submit" value="Save"/>
					</form>



				</div><!-- col-sm-6-->
			</div><!-- row-->
		</div><!-- container -->
	</section>


	<?php 
require_once "footer.php";
?>

	<!-- SCIPTS -->

	<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>

	<script src="plugin-frameworks/bootstrap.min.js"></script>

	<script src="plugin-frameworks/swiper.js"></script>


	<script src="common/scripts.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>
