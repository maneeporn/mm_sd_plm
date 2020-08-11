<?php 

require_once "config.php";

$userqueryrouting = "SELECT * FROM applepen.routing";
$queryrouting = mysqli_query($connect,$userqueryrouting);
$userqueryproduct = "SELECT * FROM product";
$queryproduct = mysqli_query($connect,$userqueryproduct);
$userquerym = "SELECT * FROM inventory join material using(material_id) join vendor using (vendor_id)";
$querym = mysqli_query($connect,$userquerym);

?>     
<!DOCTYPE HTML>
<html lang="en">
<?php 
require_once "header.php";
?>
<br><br><br><br><br><br>
<head>
	<title>Procurement</title>
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
<style>
    header{
        background-color: black;
        color: white;
    }
    .row.list{
        margin-top: 50px;
        margin-left: 20px;
        margin-right: 20px;
    }
    .row{
        height:300px;
	}
	.roww.listt{
        margin-top: 50px;
        margin-left: 20px;
        margin-right: 20px;
    }
    .roww{
        height:1100px;
    }
    .bg-layer-4:after {
        height:500px;
    }
    .img-bg.bg-1.bg-layer-4{
        height:500px;
    }
</style>
<body >
    <h2><b>ROUTING LIST</b></h2>
    <div class="row list">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td class="text-center"><strong>Routing ID</strong></td>
                                    <td class="text-center"><strong>Routing Name</strong></td>
                                    <td class="text-center"><strong>DELETE</strong></td>
                                </tr>
							</thead>
							<tbody>

							<?php while ($routing = mysqli_fetch_assoc($queryrouting)){  
                            echo"<tr>
    								<td class=\"text-center\"><b>".$routing['routing_id']."</td>
                                    <td class=\"text-center\"><b>".$routing['routing_name']."</td>
                                    <td class=\"text-center\"><b><a href=\"delete_routing.php?id=".$routing['routing_id']."\">-<b></td>
                                </tr>";
                                   
							} ?>
							</tbody>
						</table>
						<b><a href='add_routing.php' style='font-size: 0.8em; text-align: center;  display:block;'><h5>ADD</h5></a><br>
    				</div>
				</div>
			</div>
        </div>
	</div>
	<?php 
		
		$userquerywork = "SELECT * FROM applepen.work_center";
		$querywork = mysqli_query($connect,$userquerywork);
		//print_r($queryrouting);

    ?>
    <br>
    <h2>WORK CENTER LIST</h2>
	<div class="row list">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td class="text-center"><strong>WORK CENTER ID</strong></td>
                                    <td class="text-center"><strong>WORK CENTER Name</strong></td>
                                    <td class="text-center"><strong>DELETE</strong></td>
                                </tr>
							</thead>
							<tbody>

							<?php while ($work = mysqli_fetch_assoc($querywork)){  
                            echo"<tr>
    								<td class=\"text-center\">".$work['work_center_id']."</td>
                                    <td class=\"text-center\">".$work['work_center_name']."</td>
                                    <td class=\"text-center\"><b><a href=\"delete_work.php?id=".$work['work_center_id']."\">-<b></td>
                                </tr>";
                                   
							} ?>
							</tbody>
						</table>
						<b><a href='add_work.php' style='font-size: 0.8em; text-align: center;  display:block;'><h5>ADD</h5></a><br>
    				</div>
				</div>
			</div>
        </div>
    </div>
	<?php 
		
		$userqueryoperation = "SELECT * FROM applepen.operation join routing using (routing_id) join work_center using (work_center_id)";
		$queryoperation = mysqli_query($connect,$userqueryoperation);
		//print_r($queryrouting);

    ?> 
    <br>
    <h2><b>OPERATION LIST</b></h2>
	<div class="roww listt">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td class="text-center"><strong>OPERATION ID</strong></td>
									<td class="text-center"><strong>ROUNTING NAME</strong></td>
									<td class="text-center"><strong>WORK CENTER NAME</strong></td>
									<td class="text-center"><strong>OPERATION TIME</strong></td>
                                    <td class="text-center"><strong>OPERATION DESCRIPTION</strong></td>
                                    <td class="text-center"><strong>DELETE</strong></td>
                                </tr>
							</thead>
							<tbody>

							<?php while ($operation = mysqli_fetch_assoc($queryoperation)){  
                            echo"<tr>
    								<td class=\"text-center\">".$operation['operation_id']."</td>
									<td class=\"text-center\">".$operation['routing_name']."</td>
									<td class=\"text-center\">".$operation['work_center_name']."</td>
									<td class=\"text-center\">".$operation['operation_time']."</td>
                                    <td class=\"text-left\" style=\"width:350px\">".$operation['operation_description']."</td>
                                    <td class=\"text-center\"><b><a href=\"delete_operation.php?id=".$operation['operation_id']."\">-<b></td>
                                </tr>";
                                   
							} ?>
							</tbody>
						</table>
						<b><a href='add_operation.php' style='font-size: 0.8em; text-align: center;  display:block;'><h5>ADD</h5></a><br>
    				</div>
				</div>
			</div>
        </div>
	</div>
	<br>
    <h2><b>Product (Current in stock)</b></h2>
    <div class="row list">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td class="text-center"><strong>Product ID</strong></td>
                                    <td class="text-center"><strong>Product Name</strong></td>
                                    <td class="text-center"><strong>Product Quantity</strong></td>
                                </tr>
							</thead>
							<tbody>

							<?php while ($product = mysqli_fetch_assoc($queryproduct)){  
                            echo"<tr>
    								<td class=\"text-center\"><b>".$product['product_id']."</td>
                                    <td class=\"text-center\"><b>".$product['product_name']."</td>
                                    <td class=\"text-center\"><b>".$product['product_qty']."</td>
                                </tr>";
                                   
							} ?>
							</tbody>
						</table>
						<!-- <b><a href='add_routing.php' style='font-size: 0.8em; text-align: center;  display:block;'><h5>ADD</h5></a><br> -->
    				</div>
				</div>
			</div>
        </div>
	</div>
	<br>
	<br>

    <h2><b>Material (Current in stock)</b></h2>
    <div class="roww listt">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td class="text-center"><strong>Material ID</strong></td>
                                    <td class="text-center"><strong>Material Name</strong></td>
									<td class="text-center"><strong>Material Quantity</strong></td>
									<td class="text-center"><strong>Vendor</strong></td>
                                </tr>
							</thead>
							<tbody>

							<?php while ($m = mysqli_fetch_assoc($querym)){  
                            echo"<tr>
    								<td class=\"text-center\"><b>".$m['material_id']."</td>
                                    <td class=\"text-center\"><b>".$m['material_name']."</td>
									<td class=\"text-center\"><b>".$m['material_stock']."</td>
									<td class=\"text-center\"><b>".$m['vendor_name']."</td>
                                </tr>";
                                   
							} ?>
							</tbody>
						</table>
						<!-- <b><a href='add_routing.php' style='font-size: 0.8em; text-align: center;  display:block;'><h5>ADD</h5></a><br> -->
    				</div>
				</div>
			</div>
        </div>
	</div>

	<br>
	
	
	<!-- SCIPTS -->
	
	<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
	
	<script src="plugin-frameworks/bootstrap.min.js"></script>
	
	<script src="plugin-frameworks/swiper.js"></script>
	
	
	<script src="common/scripts.js"></script>
	
</body>
</html>