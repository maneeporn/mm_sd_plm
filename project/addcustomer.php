<!DOCTYPE HTML>
<html lang="en">
<?php 
require_once "header.php";
?>
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

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

<div class="slider-main h-400x h-sm-auto pos-relative pt-95 pb-25">
		<div class="img-bg bg-12 bg-layer-4"></div>
		<div class="container-fluid h-50 mt-xs-50">
			<div class="dplay-tbl">
				<div class="dplay-tbl-cell color-white text-center">
				
					<h1 class="ptb-80"><b>Customer</b></h1>
					
				</div><!-- dplay-tbl-cell -->
			</div><!-- dplay-tbl -->
		</div><!-- container -->
	</div><!-- slider-main -->
		<br>
		<center><h1>Add Customer</h1></center>
		<br>

		<div class="container">
		<form action="addcustomer2.php" medthod="GET">

			<div class="row">
			<div class="col-25">
				<label for="fname">Customer FirstName</label>
			</div>
			<div class="col-75">
				<input type="text" name="fname" placeholder="Customer FirstName..">
			</div>
			</div>
			<div class="row">
			<div class="col-25">
				<label for="fname">Customer LastName</label>
			</div>
			<div class="col-75">
				<input type="text" name="lname" placeholder="Customer LastName..">
			</div>
			</div>

            <div class="row">
			<div class="col-25">
				<label for="address">Customer Ship Address</label>
			</div>
			<div class="col-75">
				<input type="text" name="address" placeholder="Customer Ship Address..">
			</div>
			</div>

            <div class="row">
			<div class="col-25">
				<label for="address2">Customer Billing Address</label>
			</div>
			<div class="col-75">
				<input type="text" name="address2" placeholder="Customer Billing Address..">
			</div>
			</div>

            <div class="row">
			<div class="col-25">
				<label for="tel">Customer telephone number</label>
			</div>
			<div class="col-75">
				<input type="text" name="tel" placeholder="Customer telephone number..">
			</div>
			</div>

            <div class="row">
			<div class="col-25">
				<label for="email">Customer Email</label>
			</div>
			<div class="col-75">
				<input type="text" name="email" placeholder="Customer Email..">
			</div>
			</div>

            <div class="row">
			<div class="col-25">
				<label for="type">Customer Type</label>
			</div>
			<div class="col-75">
            <select name="type">
                    <?php
                        require_once ("config.php");
                        $userQuery = "SELECT * FROM customer_type ";
						$result = mysqli_query($connect,$userQuery);
                        while ($row = mysqli_fetch_assoc($result))
                        {
                            echo "<option value='".$row['customer_type_id']."'>".$row['customer_type_detail']."</option>";
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

		<?php 
require_once "footer.php";
?>	
	
	
	
	<!-- SCIPTS -->
	
	
	<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
	
	<script src="plugin-frameworks/bootstrap.min.js"></script>
	
	<script src="plugin-frameworks/swiper.js"></script>
	
	<script src="common/scripts.js"></script>

	<script language="javascript" src="js/jquery-1.4.1.min.js"></script>
	
</body>
</html>