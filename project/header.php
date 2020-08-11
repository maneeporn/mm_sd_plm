<head>
	<title>Project</title>
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
	
	<header>
		<a class="logo" href="#"><img src="image/logo3.png" alt="Logo"></a>
		
		<a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
		
		<ul class="main-menu" id="main-menu">
			<li><a href="01_index.php">Home</a></li>
			<li class="drop-down"><a href="#!">Check Stock<i class="ion-arrow-down-b"></i></a>
				<ul class="drop-down-menu drop-down-inner">
					<li><a href="03_check-product.php">Check Product</a></li>
					<li><a href="03_check-material.php">Check Material</a></li>
				</ul>
			</li>
			<li class="drop-down"><a href="#!">BOM<i class="ion-arrow-down-b"></i></a>
				<ul class="drop-down-menu drop-down-inner">
				<?php
				require_once "config.php";
				$userQuery = "SELECT * FROM product" ;
				$result = mysqli_query($connect,$userQuery);
				while ($row = mysqli_fetch_assoc($result))
					{
						echo"<li><a href='bom.php?id=".$row['product_id']."'>".$row['product_id']." ".$row['product_name']."</a></li>";
					}
				?>
					<!-- <li><a href="02_bom_001.php">AT0001 CROSS</a></li>
					<li><a href="02_bom_002.php">AT0002 RICHARD</a></li>
					<li><a href="02_bom_003.php">AT0003 LAMY</a></li>
					<li><a href="02_bom_004.php">AT0004 CROSS</a></li>
					<li><a href="02_bom_005.php">AT0005 PARKER</a></li> -->
				</ul>
			</li>
			
			<li><a href="home_sd.php">Sale and Distribution</a></li>
			<li><a href="homemm.php">MM</a></li>
			<li><a href="Procurement.php">Procurement</a></li>
			<li class="drop-down"><a href="#!">Summary<i class="ion-arrow-down-b"></i></a>
				<ul class="drop-down-menu drop-down-inner">
					<li><a href="sumproduct.php">Summary Product</a></li>
					<li><a href="sumcustomer.php">Summary Customer</a></li>
				</ul>
			</li>
			<li><a href="06_structure.php">Structure</a></li>
		</ul>
		
		<div class="clearfix"></div>
	</header>