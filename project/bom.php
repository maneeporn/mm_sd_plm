<!DOCTYPE HTML>
<html lang="en">		
<?php 
require_once "header.php";
?>
	<div class="slider-main h-400x h-sm-auto pos-relative pt-95 pb-25">
		<div class="img-bg bg-11 bg-layer-4"></div>
		<div class="container-fluid h-50 mt-xs-50">
			<div class="dplay-tbl">
				<div class="dplay-tbl-cell color-white text-center">
				
					<h1 class="ptb-90"><b><?php 
						require_once "config.php";
						$id = $_GET['id'];
						$userQuery = "SELECT * FROM product where product_id = '$id'" ;
						$result = mysqli_query($connect,$userQuery);
						while ($row = mysqli_fetch_assoc($result))
							{
								echo $row['product_name'];
							}
						?></b></h1>
					
				</div><!-- dplay-tbl-cell -->
			</div><!-- dplay-tbl -->
		</div><!-- container -->
	</div><!-- slider-main -->
	
	
	<section class="bg-1-white ptb-0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-md-12 col-lg-8 ptb-50 pr-30 pr-md-15">
					<div class="row">
						<h2 align = 'center'><b>
						<?php 
						require_once "config.php";
						$id = $_GET['id'];
						$userQuery = "SELECT * FROM product where product_id = '$id'" ;
						$result = mysqli_query($connect,$userQuery);
						while ($row = mysqli_fetch_assoc($result))
							{
								echo $row['product_id']." ".$row['product_name'];
								echo "</b></h2><br><br><br>
									<img src='image/".$row['product_photo_bom']."'>";
							}
						
						
						?>
					</div><!-- row -->

					<!-- <form action="bom.php" medthod="get">
					<br><h3>Product Quantity<h3>
						<input type='number' name='qty' min='1' value=''>
						<?php echo"
						<input type='hidden' name='id' min='1' value=$id> ";?>
						<input type='submit'>
					</form> -->
					
					<div class="row ptb-50 pr-30 pr-md-15 "	>
					
						<h2 align = 'center'><b>Bill of Material (BOM)</b></h2><br><br><br>
						<div>
						
						<form action="bom.php" medthod="get">
							Vendor : 
								<select name='vendor'>
									<?php
										if($vendor==''){
											$vendor=1;
										}
										if($vendor!=''){
											$selected = $_GET['vendor'];
										}
										$id = $_GET['id'];
										$userQuery = "SELECT * FROM vendor ";
										$result = mysqli_query($connect,$userQuery);
										while ($row = mysqli_fetch_assoc($result))
										{
											if($selected == $row['vendor_id']){
												echo"
											<option value='".$row['vendor_id']."'>".$row['vendor_id']." - ".$row['vendor_name']."</option>
											";
											}
											
											
										}
										$userQuery = "SELECT * FROM vendor";
										$result = mysqli_query($connect,$userQuery);
										while ($row = mysqli_fetch_assoc($result))
										{
											if($selected != $row['vendor_id']){
												echo"
											<option value='".$row['vendor_id']."'>".$row['vendor_id']." - ".$row['vendor_name']."</option>
											";
											}
										}
										
										
									?>
								</select>
							<?php echo"
							<input type='hidden' name='id' min='1' value=$id> ";?>
							<!-- <input type='submit'></br> -->
							<br>Product Quantity
						<input type='number' name='qty' min='1' value='1'>
						<?php echo"
						<input type='hidden' name='id' min='1' value=$id> ";?>
						<input type='submit'>
						</form>
						</div>
						<table width="1000" border = "1">
						
							 <tr bgcolor="#3D393F" >
								<!-- <th><h3 align = 'center'><font color="#FFFFFF">Item#</font></h3></th> -->
								<th><h4 align = 'center'><font color="#FFFFFF">Material_ID</font></h4></th>
								<th><h4 align = 'center'><font color="#FFFFFF">Material Name</font></h4></th>
								<!-- <th width="200"><h3 align = 'center'><font color="#FFFFFF">Description</font></h3></th> -->
								<th><h4 align = 'center'><font color="#FFFFFF">Quantity</font></h4></th>
								<th><h4 align = 'center'><font color="#FFFFFF">Unit</font></h4></th>
								<th><h4 align = 'center'><font color="#FFFFFF">Vender</font></h4></th>
								<th><h4 align = 'center'><font color="#FFFFFF">Price</font></h4></th>
								<th><h4 align = 'center'><font color="#FFFFFF">Version</font></h4></th>
								<th><h4 align = 'center'><font color="#FFFFFF">Delete</font></h4></th>
							 </tr>
							 
								 <?php 
								 session_start();
								 require_once "config.php";
								 
								 if(isset($_GET["qty"])&&$_GET["qty"] != '')
								// if($_GET["qty"] != '')
								 {
									
									// echo "<script type='text/javascript'>alert(".$_GET["qty"].");</script>";
									$qty = $_GET["qty"];
									$vendor = $_GET['vendor'];
									echo "product qty = ".$qty;
									$userQuery = "SELECT * FROM product_material join material using(material_id) join inventory using(material_id) where product_id = '$id' AND vendor_id = $vendor order by material_use desc" ;
									$result = mysqli_query($connect,$userQuery);
									while ($row = mysqli_fetch_assoc($result))
									{
										$qty2=$row['pm_qty']*$qty;
										if($row['material_use'] == 1)
										{
											
											echo "<tr bgcolor='#C3C6B1'>";
											echo "	
												<td name='id'>".$row['material_id']."</td>
												<td >".$row['material_name']."</td>
												<td>".$qty2."</td>
												<td>".$row['material_type']."</td> 
												<td>".$row['vendor_id']."</td> 
												<td>".$row['material_price']."</td>
												<td>".$row['material_version']."</td>
												<td><a href='delete.php?id=".$row['material_id']."&product=".$row['product_id']."&vendor=$vendor&qty=$qty'>Delete</a></td>";
									   		echo "</tr>";

										}
										else{
											echo "<tr bgcolor='#723C2A'>";
										echo "	
												<td name='id'>".$row['material_id']."</td>
												<td >".$row['material_name']."</td>
												<td>".$qty2."</td>
												<td>".$row['material_type']."</td> 
												<td>".$row['vendor_id']."</td> 
												<td>".$row['material_price']."</td>
												<td>".$row['material_version']."</td>
												<td><a href='delete.php?id=".$row['material_id']."&product=".$row['product_id']."&vendor=$vendor&qty=$qty'>Delete</a></td>";
									   echo "</tr>";
										}
										
									}
								 }
								 else{
									 //$qty = $_GET["qty"];
									 $vendor = $_GET['vendor'];
									 $userQuery = "SELECT * FROM product_material join material using(material_id) join inventory using(material_id) where product_id = '$id' AND vendor_id = $vendor order by material_use desc" ;
								 $result = mysqli_query($connect,$userQuery);
								//  echo "<script type='text/javascript'>alert(".$_GET["qty"].");</script>";
								 while ($row = mysqli_fetch_assoc($result))
								 {
									//$qty2=$row['pm_qty'];
									 //$qty2=$row['pm_qty']*$qty;
									 if($row['material_use'] == 1)
										{
											
											echo "<tr bgcolor='#C3C6B1'>";
											echo "	
												<td name='id'>".$row['material_id']."</td>
												<td >".$row['material_name']."</td>
												<td>".$row['pm_qty']."</td>
												<td>".$row['material_type']."</td> 
												<td>".$row['vendor_id']."</td> 
												<td>".$row['material_price']."</td>
												<td>".$row['material_version']."</td>
												<td><a href='delete.php?id=".$row['material_id']."&product=".$row['product_id']."&vendor=$vendor&qty=$qty'>Delete</a></td>";
										   
												echo "</tr>";

										}
										else{
											echo "<tr bgcolor='#723C2A' >";
									 echo "	
									 		<td name='id'>".$row['material_id']."</td>
									 		<td>".$row['material_name']."</td>
									 		<td>".$row['pm_qty']."</td>
											 <td>".$row['material_type']."</td> 
											 <td>".$row['vendor_id']."</td> 
											 <td>".$row['material_price']."</td>
											 <td>".$row['material_version']."</td>
											 <td><a href='delete.php?id=".$row['material_id']."&product=".$row['product_id']."&vendor=$vendor&qty=$qty'>Delete</a></td>";
									echo "</tr>";
										}
									 
								 }
								 
								 }
								 
								 
								 ?>
								 
						</table>
						
					</div><!-- row -->
					<p>- Insert -</p>
					<form action="iud-bom.php" medthod="get">
					<div class="row ptb-50 pr-30 pr-md-15 ">
					<table width="1000" border = "1"  >
								
						<tr >
							<th>Material : 
								<select name='M'>
									<?php
										$vendor = $_GET['vendor'];
										$qty = $_GET['qty'];
										$userQuery = "SELECT * FROM material join inventory using (material_id) where vendor_id = '$vendor'";
										$result = mysqli_query($connect,$userQuery);
										while ($row = mysqli_fetch_assoc($result))
										{
											echo"
											<option value='".$row['material_id']."'>".$row['material_id']." - ".$row['material_name']." (".$row['vendor_id'].")</option>
											";
										}
										echo"<input type='hidden' name='vendor' value='$vendor'>
										<input type='hidden' name='qty' value='$qty'>
										";
									?>
								</select>
							</th>
							<th>Quantity : <input type='number' name='q' value=1></th>
							
							<th><button>Add</button></th>
							
							<!-- q = quantity -->
						</tr>
					</table>
					</div>
					<input type="hidden" value="<?php echo $id ; ?>" name="productID">
					</form>	


					<p>- Change -</p>
					<form action="change-bom.php" medthod="get">
					<div class="row ptb-50 pr-30 pr-md-15 ">
					<table width="1000" border = "1"  >
								
						<tr >
							<th>Change : 
								<select name='Mchange'>
									<?php
										$id = $_GET['id'];
										$vendor = $_GET['vendor'];
										$qty = $_GET['qty'];
										$userQuery = "SELECT * FROM product_material join material using(material_id) where product_id = '$id' 
										order by material_name ASC";
										$result = mysqli_query($connect,$userQuery);
										while ($row = mysqli_fetch_assoc($result))
										{
											echo"
											<option value='".$row['material_id']."'>".$row['material_id']." - ".$row['material_name']."</option>
											";
										}
										
									?>
								</select>
							</th>
							<th>
							Quantity : <input type='number' name='q' id='q'>
							</th>
						
							<!-- q = quantity -->
						</tr>
						<tr>
							<th>Material ID : <input type="text" value="" name="Mid"></th>
							<th>Name : <input type='text' name='Mname'></th>
						</tr>
						<tr>
							<th>Type : <input type="text" value="" name="type"></th>
							<th>Version : <input type="number" value="" name="ver"></th>
							<!-- <th><button>Go</button></th> -->
						</tr>
						<tr>
							<th>Stock : <input type="number" value="" name="stock"></th>
							<th>Price : <input type="number" value="" name="price"></th>
							<!-- <th><button>Go</button></th> -->
						</tr>
						<tr>
							<th>Vendor ID : <input type="number" value="" name="vendornew"></th>
						
							<th><button>Go</button></th>
						</tr>
					</table>
					</div>
					<input type="hidden" value="<?php echo $id ; ?>" name="productID">
					<input type="hidden" value="<?php echo $vendor ; ?>" name="vendor">
					<input type="hidden" value="<?php echo $qty ; ?>" name="qty">
					</form>
					<!-- <input onclick='insertM()' type='button' value='Change' /> -->
					
				</div><!-- col-sm-9 -->
				
				
<?php 
require_once "side.php";
require_once "footer.php";
?>	
	
	
	
	<!-- SCIPTS -->
	
	
	<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
	
	<script src="plugin-frameworks/bootstrap.min.js"></script>
	
	<script src="plugin-frameworks/swiper.js"></script>
	
	<script src="common/scripts.js"></script>

	<script language="javascript" src="js/jquery-1.4.1.min.js"></script>

	<script>
	function openForm() {
	document.getElementById("myForm").style.display = "block";
	}

	function closeForm() {
	document.getElementById("myForm").style.display = "none";
	}
	</script>
		
	
</body>
</html>