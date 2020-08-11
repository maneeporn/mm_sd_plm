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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="logintemplace.css" rel="stylesheet" type="text/css" />
	<link href="plugin-frameworks/bootstrap.min.css" rel="stylesheet">
	<link href="plugin-frameworks/swiper.css" rel="stylesheet">
	
	<link href="fonts/ionicons.css" rel="stylesheet">
	
		
	<link href="common/styles.css" rel="stylesheet">

	
	<header>
		<a class="logo" href="#"><img src="image/logo3.png" alt="Logo"></a>
		
		<a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
		
		<ul class="main-menu" id="main-menu">
			<li><a href="01_index.html">Home</a></li>
			<li class="drop-down"><a href="#!">BOM<i class="ion-arrow-down-b"></i></a>
				<ul class="drop-down-menu drop-down-inner">
					<li><a href="02_bom_001.php">AT0001 CROSS</a></li>
					<li><a href="02_bom_002.php">AT0002 RICHARD</a></li>
					<li><a href="02_bom_003.php">AT0003 LAMY</a></li>
					<li><a href="02_bom_004.php">AT0004 CROSS</a></li>
					<li><a href="02_bom_005.php">AT0005 PARKER</a></li>
				</ul>
			</li>
			<li class="drop-down"><a href="#!">Check Stock<i class="ion-arrow-down-b"></i></a>
				<ul class="drop-down-menu drop-down-inner">
					<li><a href="03_check-product.php">Check Product</a></li>
					<li><a href="03_check-material.php">Check Material</a></li>
				</ul>
			</li>
			<li><a href="#">Order Materials</a></li>
			<li><a href="#">Check Order</a></li>
			<li><a href="06_structure.php">Structure</a></li>
			<li><a href="07_login.php">log in</a></li>
		</ul>
		
		<div class="clearfix"></div>
	</header>
	
	
	
	<div class="slider-main h-400x h-sm-auto pos-relative pt-95 pb-25">
		<div class="img-bg bg-0 bg-layer-4"></div>
		<div class="container-fluid h-50 mt-xs-50">
			<div class="dplay-tbl">
				<div class="dplay-tbl-cell color-white text-center">
				
					<h1 class="ptb-90"><b>Login</b></h1>
					
				</div><!-- dplay-tbl-cell -->
			</div><!-- dplay-tbl -->
		</div><!-- container -->
	</div><!-- slider-main -->
	

<body >	
	<section class="bg-1-white ptb-70 ptn-sm-50">
		<div class="container">
			<div class="row">
				<div class="col-xl-2"></div>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
					<form class="form-block form-h-55 form-plr-20 form-bg-white text-center">
						<div class="row">
							<div class="login-wrap">
								<div class="login-html">
									<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
									<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
									<div class="login-form">
										
									
										<div class="sign-in-htm">
										<form action="checklogin.php" method="get">	
											<div class="group">
												<input type="text" name="user" placeholder="Email">
												<!-- <label for="user" class="label">Email</label>
												<input id="user" type="text" class="input" name="user"> -->
											</div>
											<div class="group">
												<!-- <label for="pass" class="label">Password</label>
												<input id="pass" type="password" class="input" data-type="password" name="pass"> -->
											</div>
											<input type="password" name="pass" placeholder="Password">
											<!-- <div class="group">
												<input id="check" type="checkbox" class="check" checked>
												<label for="check"><span class="icon"></span> Keep me Signed in</label>
											</div> -->
											<div class="group">
												<input type="submit" value="Sign In">
											</div>
										</form>


											<div class="hr"></div>
											<div class="foot-lnk">
												<a href="#forgot">Forgot Password?</a>
											</div>
										</div>
										<div class="sign-up-htm">
											<div class="group">
												<label for="user" class="label">Username</label>
												<input id="user" type="text" class="input">
											</div>
											<div class="group">
												<label for="pass" class="label">Password</label>
												<input id="pass" type="password" class="input" data-type="password">
											</div>
											<div class="group">
												<label for="pass" class="label">Repeat Password</label>
												<input id="pass" type="password" class="input" data-type="password">
											</div>
											<div class="group">
												<label for="pass" class="label">Email Address</label>
												<input id="pass" type="text" class="input">
											</div>
											<div class="group">
												<input type="submit" class="button" value="Sign Up">
											</div>
											<div class="hr"></div>
											<div class="foot-lnk">
												<label for="tab-1">Already Member?</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div><!-- row-->
						
						
					</form>
				</div><!-- col-sm-6-->	
			</div><!-- row-->	
		</div><!-- container -->
	</section>
	
	
	<footer class="bg-191 color-ash pt-50 pb-20 text-left center-sm-text">
		
		<div class="container-fluid">
			<div class="row">
			
				<div class="col-lg-1"></div>
				
				<div class="col-md-4 col-lg-6 mb-30">
					<div class="card h-100">
						<div class="dplay-tbl">
							<div class="dplay-tbl-cell">
							
								<h3>APPLE PEN</h3>
								<p class="color-ash mt-25"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> APPLE PEN Company All rights reserved <br>APPLE PEN Company : 239 Huaykaew Rd., Suthep, Muang, Chiang Mai 50200 
<br>Tel.053-956447 Fax.053-945976  <br>E-mail.applepen_company@gmail.com
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
								
							</div><!-- dplay-tbl-cell -->
						</div><!-- dplay-tbl -->
					</div><!-- card -->
				</div><!-- col-lg-4 col-md-6 -->
				
				
				
				
				
			</div><!-- row -->
		</div><!-- container -->
	</footer>
	<!-- SCIPTS -->
	
	<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
	
	<script src="plugin-frameworks/bootstrap.min.js"></script>
	
	<script src="plugin-frameworks/swiper.js"></script>
	
	
	<script src="common/scripts.js"></script>
	
</body>
</html>