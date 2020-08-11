<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Quite Light</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">

	<!-- CSS -->
	<link rel = "stylesheet" type = "text/css" href = "style.css" >
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
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">



						<div class="row">
							<div class="col-sm-6 mb-30">
<!-- form -->

		<div class="container">
		<form action="add-inquiry.php" medthod="GET">

			<div class="row">
			<div class="col-25">
				<label for="customer_id">Customer ID</label>
			</div>
			<div class="col-75">
			<select name="customer_id">
			<?php
                        require_once ("config.php");
                        $userQuery = "SELECT * FROM customer ";
						$result = mysqli_query($connect,$userQuery);
                        while ($row = mysqli_fetch_assoc($result))
                        {
                            echo "<option value='".$row['customer_id']."'>".$row['customer_fname']." ".$row['customer_lname']."</option>";
                        }
					?>
			</select>
			</div>
			</div>

			<div class="row">
			<div class="col-25">
				<label for="doc_date">Date</label>
			</div>
			<div class="col-75">
				<input type="date" name="doc_date">
			</div>
			</div>

			<div class="row">
			<div class="col-25">
				<label for="employee_id">Employee ID</label>
			</div>
			<div class="col-75">
			<select name="employee_id">
			<?php
                        require_once ("config.php");
                        $userQuery = "SELECT * FROM employee ";
						$result = mysqli_query($connect,$userQuery);
                        while ($row = mysqli_fetch_assoc($result))
                        {
                            echo "<option value='".$row['employee_id']."'>".$row['employee_name']."</option>";
                        }
					?>
			</select>
			</div>
			</div>

            <div class="row">
			<div class="col-25">
				<label for="description">Description</label>
			</div>
			<div class="col-75">
				<textarea id="subject" name="description" placeholder="Your Massage.." style="height:200px"></textarea>
			</div>
			</div>

            <div class="row">
			<div class="col-25">
				<label for="company_id">Company ID</label>
			</div>
			<div class="col-75">
			<select name="company_id">
			<?php
                        require_once ("config.php");
                        $userQuery = "SELECT * FROM company ";
						$result = mysqli_query($connect,$userQuery);
                        while ($row = mysqli_fetch_assoc($result))
                        {
                            echo "<option value='".$row['company_id']."'>".$row['company_name']."</option>";
                        }
					?>
			</select>
			</div>
			</div>

			<div class="row">
			<input type="submit" value="Submit">
			</div>
		</form>
		</div>

							</div><!-- dplay-tbl-cell -->
						</div><!-- dplay-tbl -->
					</div><!-- card -->
				</div><!-- col-lg-4 col-md-6 -->

			</div><!-- row -->
		</div><!-- container -->

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
