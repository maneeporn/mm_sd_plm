<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Material Management</title>
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
	
	<?php 
require_once "header.php";
?>
	
	<div class="slider-main h-800x h-sm-auto pos-relative pt-95 pb-25">
		<div class="img-bg bg-01 bg-layer-4"></div>
		<div class="container-fluid h-100 mt-xs-50">
		
			<div class="row h-100">
				<div class="col-md-1"></div>
				<div class="col-sm-12 col-md-5 h-100 h-sm-50">
					<div class="dplay-tbl">
						<div class="dplay-tbl-cell color-white mtb-30">
							<div class="mx-w-500x">
								<h1 class="mt-20 mb-30"><b>MATERIAL MANAGEMENT</b></h1>
								<h6><a class="plr-20 btn-brdr-grey color-white" href="pr.php"><b>Purchasing</b></a></h6>
							</div><!-- mx-w-200x -->
						</div><!-- dplay-tbl-cell -->
					</div><!-- dplay-tbl -->
				</div><!-- col-sm-6 -->
				
				<div class="col-sm-12 col-md-6 h-sm-50 oflow-hidden swiper-area pos-relative">			
	
					<div class="abs-blr pos-sm-static">
						<div class="row pos-relative mt-50 all-scroll">
						
							<div class="swiper-scrollbar resp"></div>
							<div class="col-md-10">
								
								<h5 class="mb-50 color-white"><b>DISPLAY DOCUMENT</b></h5>
								
								<div class="swiper-container oflow-visible" data-slide-effect="slide" data-autoheight="false" 
									data-swiper-speed="500" data-swiper-margin="25" data-swiper-slides-per-view="2"
									data-swiper-breakpoints="true" data-scrollbar="true" data-swiper-loop="true"
									data-swpr-responsive="[1, 2, 1, 2]">
									
									
								
                                <div class="swiper-wrapper">
                                    <!-- data-swiper-autoplay="1000"  --> 
                                    <div class="swiper-slide">
                                        <div class="bg-white">
                                            <img src="images/hot_news_1_300x150.jpg" alt="">
                                            
                                            <div class="plr-25 ptb-15">
                                                <h4 class="mtb-10">
                                                    <a href="display_list_pr.php"><b>PURCHASE REQUISITION</b></a></h4>
                                            </div><!-- hot-news -->
                                        </div><!-- hot-news -->
                                    </div><!-- swiper-slide -->
                                    
                                    <div class="swiper-slide">
                                        <div class="bg-white">
                                            <img src="images/hot_news_2_300x150.jpg" alt="">
                                            
                                            <div class="plr-25 ptb-15">
                                                <h4 class="mtb-10">
                                                    <a href="display_list_po.php"><b>PURCHASE ORDER</b></a></h4>
                                            </div><!-- hot-news -->
                                        </div><!-- hot-news -->
                                    </div><!-- swiper-slide -->
                                    
                                    <div class="swiper-slide">
                                        <div class="bg-white">
                                            <img src="images/hot_news_3_300x150.jpg" alt="">
                                            
                                            <div class="plr-25 ptb-15">
                                                <h4 class="mtb-10">
                                                    <a href="display_list_receipt.php"><b>RECEIPT OF GOODS</b></a></h4>
                                            </div><!-- hot-news -->
                                        </div><!-- hot-news -->
                                    </div><!-- swiper-slide -->
                                    
                                    
                                    <div class="swiper-slide">
                                        <div class="bg-white">
                                            <img src="images/hot_news_1_300x150.jpg" alt="">
                                            
                                            <div class="plr-25 ptb-15">
                                                <h4 class="mtb-10">
                                                    <a href="display_list_invoice.php"><b>INVOICE</b></a></h4>
												</div><!-- hot-news -->
											</div><!-- hot-news -->
										</div><!-- swiper-slide -->
										
									</div><!-- swiper-wrapper -->
								</div><!-- swiper-container -->
								
							</div><!-- col-sm-6 -->
						</div><!-- all-scroll -->
					</div><!-- row -->
				</div><!-- col-sm-6 -->
				
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- slider-main -->
	
	
	<?php 
require_once "footer.php";
?>	
	
	<!-- SCIPTS -->
	
	<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
	
	<script src="plugin-frameworks/bootstrap.min.js"></script>
	
	<script src="plugin-frameworks/swiper.js"></script>
	
	
	<script src="common/scripts.js"></script>
	
</body>
</html>