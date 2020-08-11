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
				
					<h1 class="ptb-90"><b>Summary Customer</b></h1><br>
					
				</div><!-- dplay-tbl-cell -->
			</div><!-- dplay-tbl -->
		</div><!-- container -->
	</div><!-- slider-main -->

    <center>
  <br>
<h3>All</h3>
<div id="barchartA"></div>
<h3>Current Month</h3>
<div id="barchartM"></div>
<h3>Current Week</h3>
<div id="barchartW"></div>
<?php 
        require_once "config.php";
        $userQuery = "SELECT sum(net_total) as total FROM document_sd " ;
        $result = mysqli_query($connect,$userQuery);
        while ($row = mysqli_fetch_assoc($result))
        {
            $total = number_format($row['total'],2);
            echo "<h3>TOTAL : ".$total." THB</h3><br>";
        }
    ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Price'],
    <?php 
        require_once "config.php";
        
        $userQuery = "SELECT customer_fname , sum(net_total) as total FROM `document_sd` join customer using (customer_id) WHERE `doc_sd_type_id` = 5 GROUP BY customer_id  " ;
        $result = mysqli_query($connect,$userQuery);
        while ($row = mysqli_fetch_assoc($result))
        {
            echo " ['".$row['customer_fname']."',".$row['total']."], ";
        }
    ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Summary customer', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.ColumnChart(document.getElementById('barchartA'));
  chart.draw(data, options);
}
</script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Price'],
    <?php 
        require_once "config.php";
        
        $userQuery = "SELECT customer_fname , sum(net_total) as total FROM `document_sd` join customer using (customer_id) WHERE `doc_sd_type_id` = 5  and Month(doc_date) = Month(current_date) GROUP BY customer_id  " ;
        $result = mysqli_query($connect,$userQuery);
        while ($row = mysqli_fetch_assoc($result))
        {
            echo " ['".$row['customer_fname']."',".$row['total']."], ";
        }
    ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Summary customer', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.ColumnChart(document.getElementById('barchartM'));
  chart.draw(data, options);
}
</script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Price'],
    <?php 
        require_once "config.php";
        
        $userQuery = "SELECT customer_fname , sum(net_total) as total FROM `document_sd` join customer using (customer_id) WHERE `doc_sd_type_id` = 5  and Week(doc_date) = Week(current_date) GROUP BY customer_id " ;
        $result = mysqli_query($connect,$userQuery);
        while ($row = mysqli_fetch_assoc($result))
        {
            echo " ['".$row['customer_fname']."',".$row['total']."], ";
        }
    ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Summary customer', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.ColumnChart(document.getElementById('barchartW'));
  chart.draw(data, options);
}
</script>





</center>



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