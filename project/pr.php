<?php

require_once "config.php";
  
	$userquery = "Select * from vendor";
	$result = mysqli_query($connect,$userquery);

?>

<html>
	<head>
		<title>Purchase  Requisition</title>
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
		<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
		<script src="plugin-frameworks/bootstrap.min.js"></script>
		<script src="plugin-frameworks/swiper.js"></script>
		<script src="common/scripts.js"></script>
	</head>
	<style>
		[type="date"] {
			background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
			}
		[type="date"]::-webkit-inner-spin-button {
			display: none;
			}
		[type="date"]::-webkit-calendar-picker-indicator {
			opacity: 0;
			}

	</style>


	<body>

		<div class="clearfix"></div>
		<div class="slider-main h-500x h-sm-auto pos-relative pt-95 pb-25">
			<div class="img-bg bg-1 bg-layer-4"></div>
			<div class="container-fluid h-100 mt-xs-50">
				<div class="row h-80">
					<div class="col-md-1"></div>
					<div class="col-sm-12 col-md-5 h-100 h-sm-50">
						<div class="dplay-tbl">
							<div class="dplay-tbl-cell color-white mtb-30">
								<div class="mx-w-400x">
									<h1 class="mt-20 mb-30"><b>PURCHASING</b></h1>
								</div><!-- mx-w-200x -->
							</div><!-- dplay-tbl-cell -->
						</div><!-- dplay-tbl -->
					</div><!-- col-sm-6 -->
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- slider-main -->
		
		<section class="bg-1-white ptb-0">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-md-12 col-lg-8 ptb-50 pr-30 pr-md-15">
						<h4 class="mb-30 mt-20 clearfix"><b>PURCHASE REQUISITION</b></h4>
						
						<div class="row">
							<div class="col-xl-2"></div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
									<!-- FORM PR -->
									<form method="post" action="selectmaterial.php">

										<div class="row">
											<div class="col-sm-12 mb-30">
												<span>Requested by:</span>
												<input type="text" name="RequestedName">
											</div>
											<div class="col-sm-12 mb-30">
												<span>Date:</span>
												<input type="date" name="Date">
											</div>
										
											<div class="col-sm-12 mb-30">
												<span>Department:</span>
												<input type="text" name="Depertmant">
											</div>

											<div class="col-sm-12 mb-30">
												<div class="drop-down">Vendor Name:
												<select type="text" name="VendorID" >
													<?php 
														while($row = mysqli_fetch_assoc($result))
														{
															echo"<option value=\"".$row['vendor_id']."\">".$row['vendor_id']."".$row['vendor_name']."</option>";
														}
													?>
												</select>
												</div>
											</div>

											<div class="col-sm-12 mb-30">
												<span>Date Needed:</span>
												<input type="date" name="DateWant">
											</div>
											
											<div class="col-sm-12 mb-30">
												<span>Ship Via:</span>
												<input type="text" name="ShipVia">
											</div> 
										</div>
										
										<button class="btn-b-lg btn-brdr-grey plr-25 color-ash" type="submit"><b>Select Material</b></button>
										
									</form>
								</div><!-- col-sm-6-->	
						
							<!-- END FORM -->

						</div><!-- row -->
					</div><!-- col-sm-3 -->
					
				</div><!-- row -->
				
			</div><!-- container -->
			
		</section>
		

			
	</body>

</html>