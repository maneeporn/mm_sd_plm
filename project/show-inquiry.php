
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Quite Light</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">

	<!-- CSS -->
	<link rel = "stylesheet" type = "text/css" href = "style2.css" >

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">

	<!-- Stylesheets -->

	<link href="plugin-frameworks/bootstrap.min.css" rel="stylesheet">
	<link href="plugin-frameworks/swiper.css" rel="stylesheet">

	<link href="fonts/ionicons.css" rel="stylesheet">


	<link href="common/styles.css" rel="stylesheet">


</head>
<body>

	<?php 
require_once "header.php";
?>


	<div class="slider-main h-500x h-sm-auto pos-relative pt-95 pb-25">
		<div class="img-bg bg-1 bg-layer-4"></div>
		<div class="container-fluid h-100 mt-xs-50">
			<div class="dplay-tbl">
				<div class="dplay-tbl-cell color-white text-center">


					<h1 class="ptb-50"><b>INQUIRY</b></h1>


				</div><!-- dplay-tbl-cell -->
			</div><!-- dplay-tbl -->
		</div><!-- container -->
	</div><!-- slider-main -->


	<section class="bg-1-white ptb-70 ptn-sm-50">
		<div class="container">
			<div class="row">
				<div class="col-xl-2"></div>
				<div >



						<div class="row">
							<div class="col-sm-6 mb-30">
<!-- form -->

		<div class="container">
<!-- form -->
			
			<table class='invoice' text-align= center>
						<tr>
							<th>Doc_ID</th>
							<!-- <th>Doc Type ID</th> -->
							<th>Doc_Type</th>
              				<th>Company_name </th>
              				<th>Customer_name</th>
							<th>Employee_name </th>
							<th>Date</th>
							<th>Description</th>
							<th>View</th>
						</tr>
<?php
		session_start();
		require_once "config.php";
		//echo "<form class='form-block form-h-55 form-plr-20 form-bg-white text-center' action='show-document.php' method='GET'>";
		$userQuery = "SELECT * from document_sd join doc_sd_type using(doc_sd_type_id) join customer using (customer_id) 
		join company using (company_id) join employee using (employee_id) where doc_sd_type_id = 1";
		$result = mysqli_query($connect,$userQuery);
		while ($row = mysqli_fetch_assoc($result))
		{
			echo "<tr>  <td>".$row['doc_id']."</td>
						<td>".$row['doc_sd_type_name']."</td>
						<td>".$row['company_name']."</td>
						<td>".$row['customer_fname']." ".$row['customer_lname']."</td>
						<td>".$row['employee_name']."</td>
						<td>".$row['doc_date']."</td>
						<td>".$row['description']."</td>
						<form action='show-document.php' medthod='get'>
						<input type = 'hidden' name = 'id' value =' ".$row['doc_id']." '>
						
						<td><input type = 'submit' value = 'view' ></td>
			</tr></form>";
		}




 ?>
</table>
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
