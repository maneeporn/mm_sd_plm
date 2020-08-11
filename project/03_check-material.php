<!DOCTYPE HTML>
<html lang="en">
<?php 
require_once "header.php";
?>
	
	
	<div class="slider-main h-400x h-sm-auto pos-relative pt-95 pb-25">
		<div class="img-bg bg-12 bg-layer-4"></div>
		<div class="container-fluid h-50 mt-xs-50">
			<div class="dplay-tbl">
				<div class="dplay-tbl-cell color-white text-center">
				
					<h1 class="ptb-90"><b>Material</b></h1><br>
					
				</div><!-- dplay-tbl-cell -->
			</div><!-- dplay-tbl -->
		</div><!-- container -->
	</div><!-- slider-main -->
	
	
	<section class="bg-1-white ptb-0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-md-12 col-lg-8 ptb-50 pr-30 pr-md-15">
					
					
					<div class="row ptb-50 pr-30 pr-md-15 ">
						<h2 align = 'center'><b>Material</b></h2><br><br><br>
						<table width="1000" height="300"border = "1" >
							 <tr bgcolor="#38305B">
								<th><h3 align = 'center'><font color="#FFFFFF">No.</font></h3></th>
								<th><h3 align = 'center'><font color="#FFFFFF">Material_ID</font></h3></th>
								<th width="200"><h3 align = 'center'><font color="#FFFFFF">Description</font></h3></th>
								<th width="200"><h3 align = 'center'><font color="#FFFFFF">Vender</font></h3></th>
								<th width="200"><h3 align = 'center'><font color="#FFFFFF">Quantity</font></h3></th>
								<th><h3 align = 'center'><font color="#FFFFFF">Unit</font></h3></th>
								<th><h3 align = 'center'><font color="#FFFFFF">Delete</font></h3></th>
							 </tr>
							 
							 <?php
							 require_once "config.php";
							$userQuery = "SELECT * FROM material join inventory using(material_id) order by material_name" ;
							$result = mysqli_query($connect,$userQuery);
							$i = 1;
							while ($row = mysqli_fetch_assoc($result))
							{
								echo "";
								echo "<tr bgcolor='#FFFFFF' align = 'center'>
								<td >".$i."</td>
								<td >".$row['material_id']."</td>
								<td>".$row['material_name']."</td>
								<td>".$row['vendor_id']."</td>
								<td>".$row['material_stock']."</td>
								<td>".$row['material_type']."</td>
								<form action='delete-material.php' medthod='get'>
								<td><input type = 'hidden' name = 'id' value = '".$row['material_id']."'>
									<input type = 'submit' value = 'delete'>
								</td></tr>
								</form>";
								
							 $i++;
							}
							 ?>
							 
						</table>
					</div><!-- row -->
					<p>- Insert -</p>
					<form action="insert-material.php" medthod="get">
					<div class="row ptb-50 pr-30 pr-md-15 ">
					<table width="1000" border = "1"  >
						<tr>
							<th>Material ID : <input type="text" value="" name="material_id"></th>
							<th>Description : <input type="text" value="" name="description"></th>
						</tr>		
						<tr >
							<th>Vendor : 
								<select name='vendor'>
									<?php
										$id = $_GET['id'];
										$userQuery = "SELECT * FROM vendor ";
										$result = mysqli_query($connect,$userQuery);
										while ($row = mysqli_fetch_assoc($result))
										{
											echo"
											<option value='".$row['vendor_id']."'>".$row['vendor_id']." - ".$row['vendor_name']."</option>
											";
										}
										
									?>
								</select>
							</th>
							<th>
							Quantity : <input type='number' name='quantity' id='quantity'>
							
							</th>
							
						
							<!-- q = quantity -->
						</tr>
						<tr>
						<th>Stock : <input type="number" name="stock" id='stock'></th>
						
						<th>Price : <input type='number' name='price' id='price'>
							</th>
						</tr>
						
						
						<tr>
						<th>Unit : <input type="text" value="" name="unit"></th>
						
							
							<th><button>Go</button></th>
						</tr>
					</table>
					</div>
					<input type="hidden" value="<?php echo $id ; ?>" name="productID">
					</form>
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
	
</body>
</html>