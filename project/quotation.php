<?php
require_once "config.php";
$userquery="SELECT * FROM document_sd ORDER BY doc_id DESC limit 1";
$result=mysqli_query($connect,$userquery);
$inquiry = mysqli_fetch_assoc($result);


$userquery1="SELECT * FROM item_list
join document_sd on item_list.doc_id = document_sd.doc_id
join product on item_list.product_id = product.product_id";
$result1=mysqli_query($connect,$userquery1);

$userquery2="SELECT * FROM product ";
$result2=mysqli_query($connect,$userquery2);
$product = mysqli_fetch_assoc($result2);


$userquery3="SELECT * FROM customer join document_sd on customer.customer_id = document_sd.customer_id
where `doc_sd_type_id` = 1 ORDER BY doc_id DESC limit 1 ";
$result3=mysqli_query($connect,$userquery3);
$customer_type = mysqli_fetch_assoc($result3);
//$item = mysqli_fetch_assoc($result1);

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

/* table, td, th {
	border: .5px solid black;
} */

 table  {
	margin: 10px ;
 	padding: 0 20px;
	width: 99%;
	border-collapse: collapse;
}

td{
	height: 50px;
	text-align: center;
	border:1px solid black;
}
th {
	height: 50px;
 text-align: center;
 border:1px solid black;
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

.right {
  position: absolute;
  right: 0px;
  width: 300px;
  border: 3px solid #73AD21;
  padding: 10px;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
	<?php 
require_once "header.php";
?>


	<div class="slider-main h-500x h-sm-auto pos-relative pt-95 pb-25">
		<div class="img-bg bg-1 bg-layer-4"></div>
		<div class="container-fluid h-100 mt-xs-50">
			<div class="dplay-tbl">
				<div class="dplay-tbl-cell color-white text-center">


					<h1 class="ptb-50"><b>QUOTATION</b></h1>


				</div><!-- dplay-tbl-cell -->
			</div><!-- dplay-tbl -->
		</div><!-- container -->
	</div><!-- slider-main -->


	<section class="bg-1-white ptb-70 ptn-sm-50">
		<div class="container">
			<div class="row">
				<div class="col-xl-2"></div>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">



						<div class="row">
							<div class="col-sm-6 mb-30">
<!-- form -->


		<div class="container">
		<form action="add-quotation.php" medthod="GET">

<div class="row">
<div class="col-25">
<label for="company_id">Inquiry docment ID</label>
</div>
<div class="col-75">
		<p><?php
		 echo $inquiry['doc_id'];
		 echo "<input name=\"doc_id\" value=\"{$inquiry['doc_id']}\" type=\"hidden\">";
		?></p>

</div>
</div>

<div class="row">
<div class="col-25">
<label for="company_id">Company ID</label>
</div>
<div class="col-75">
		<p><?php
		 echo $inquiry['company_id'];
		 echo "<input name=\"company_id\" value=\"{$inquiry['company_id']}\" type=\"hidden\">";
		?></p>

</div>
</div>

<div class="row">
<div class="col-25">
	<label for="customer_id">Customer ID</label>
</div>
<div class="col-75">
			<p>
			<?php
			echo $inquiry['customer_id'];
			echo "<input name=\"customer_id\" value=\"{$inquiry['customer_id']}\" type=\"hidden\">";
			?></p>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="company_id">Custumer type</label>
</div>
<div class="col-75">
		<p><?php
		 echo $customer_type['customer_type_id'];
		?></p>

</div>
</div>


<div class="row">
<div class="col-25">
	<label for="doc_date">Document Date</label>
</div>
<div class="col-75">
	<input type="date" name="doc_date">
</div>
</div>

	<div class="row">
	<div class="col-25">
		<label for="doc_date">Exp Date</label>
	</div>
	<div class="col-75">
		<input type="date" name="exp_date">
	</div>
	</div>

<div class="row">
<div class="col-25">
	<label for="employee_id">Employee ID</label>
</div>
<div class="col-75">
			<p><?php
			echo $inquiry['employee_id'];
			echo "<input name=\"employee_id\" value=\"{$inquiry['employee_id']}\" type=\"hidden\">";
			?></p>
</div>
</div>

<div class="row">
<div class="col-25">
	<label for="employee_id">Payment Terms</label>
</div>
<div class="col-75">
	<input type="text" name="term" placeholder="Payment Term..">
</div>
</div>


<div class="row">
<div class="col-25">
	<label for="employee_id">Item List</label>
</div>
<div class="col-75">
	<table align = "center" style="border:1px solid black">
		<tr><th>Product ID</th><th>Product Name</th>
			<th>Product Type</th><th>Detail of Product</th>
			<th>Price per unit</th><th>Discount per Line Total(%)</th>
		<th>Quantity</th><th>Line Total</th></tr>
	<?php
	$subtotal=0;
	while($item = mysqli_fetch_assoc($result1)){

		if($inquiry['doc_id']==$item['doc_id']){
		echo "<tr>";

		 echo "<td>".$item['product_id']."</td>";
		 echo "<input name=\"product_id[]\" value=\"{$item['product_id']}\" type=\"hidden\">";
		 printf("<td >%s</td>",$item['product_name']);
		 printf("<td>%s</td>",$item['product_type']);
		 printf("<td>%s</td>",$item['product_detail']);

		 printf("<td>%s</td>",$item['product_price']);
		 echo "<input name=\"product_price[]\" value=\"{$item['product_price']}\" type=\"hidden\">";

		 printf("<td>%s</td>",$item['product_discount']);

		 printf("<td>%s</td>",$item['quantity']);
		 echo "<input name=\"quantity[]\" value=\"{$item['quantity']}\" type=\"hidden\">";
		 printf("<td>%s</td>",$item['total']);
		 echo "<input name=\"total[]\" value=\"{$item['total']}\" type=\"hidden\">";
		echo "</tr>";
		$subtotal= $subtotal+$item['total'];
	}

}
	?>
</table>
<table class="right" align = "center">
	 <?php
// member
	if($customer_type['customer_type_id']==1)
	{
		$discount=0.1;
		$subtotal_dis=$subtotal-($subtotal*$discount);
		$nettotal=($subtotal_dis*0.07)+$subtotal_dis;
		echo "<tr>";
		echo "<td>Sub Total</td>";
		 echo "<td>".$subtotal."</td>";
		 echo "<input name=\"subtotal\" value=\"$subtotal\" type=\"hidden\">";
		 echo "</tr>";
		 echo "<td>Discount</td>";
		 echo "<td>".$discount."</td>";
		 echo "<input name=\"discount\" value=\"$discount\" type=\"hidden\">";

		 echo "</tr>";
		 echo "<td>TAX</td>";
		 echo "<td>0.07</td>";
		echo "</tr>";
		echo "<td>NetTotal</td>";
		echo "<td>".$nettotal."</td>";
		echo "<input name=\"nettotal\" value=\"$nettotal\" type=\"hidden\">";

	 echo "</tr>";
	}
	// normal
	else if ($customer_type['customer_type_id']==2){
		$discount=0;
		$nettotal=($subtotal*0.07)+$subtotal;
		echo "<tr>";
		echo "<td>Sub Total</td>";
		 echo "<td>".$subtotal."</td>";
		 echo "<input name=\"subtotal\" value=\"$subtotal\" type=\"hidden\">";
		 echo "</tr>";
		 echo "<td>Discount</td>";
		 echo "<td>".$discount."</td>";
		 echo "<input name=\"discount\" value=\"$discount\" type=\"hidden\">";

		 echo "</tr>";
		 echo "<td>TAX</td>";
		 echo "<td>0.07</td>";
		echo "</tr>";
		echo "<td>NetTotal</td>";
		echo "<td>".$nettotal."</td>";
		echo "<input name=\"nettotal\" value=\"$nettotal\" type=\"hidden\">";

	 echo "</tr><br><br><br>";

	}



	 ?>
</table>
</div>
</div></div></div></div>
<h3 id="subject" name="description" style="height:200px"><br><br><br><br><br><br>Promotion if you are member.You will get discount 10%.</h3>
<input name="description" value="Promotion if you are member.You will get discount 10%." type="hidden">



						<div align="center">
					<input  type="submit" value="Save"/>
							</div>
									</form>
										</div><!-- col-sm-12-->
										</div>		<!-- row-->
								</div><!-- row-->
									</div><!-- col-sm-12-->




				</div><!-- col-sm-6-->
			</div><!-- row-->
		</div><!-- container -->
	</section>


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
