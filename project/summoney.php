<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Summary</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="plugin-frameworks/bootstrap.min.css" rel="stylesheet">
	<link href="plugin-frameworks/swiper.css" rel="stylesheet">
	
	<link href="fonts/ionicons.css" rel="stylesheet">
  
  <link href="salesummary.css" rel="stylesheet">
		
	<link href="common/styles.css" rel="stylesheet">
	
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  	
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
 
</head>
<body>
	
<?php 
require_once "header.php";
?>
	
	
	<div class="slider-main h-400x h-sm-auto pos-relative pt-95 pb-25">
		<div class="img-bg bg-11 bg-layer-4"></div>
		<div class="container-fluid h-50 mt-xs-50">
			<div class="dplay-tbl">
				<div class="dplay-tbl-cell color-white text-center">
				
					<h1 class="ptb-90"><b>Sales for Customers</b></h1>
					
				</div><!-- dplay-tbl-cell -->
			</div><!-- dplay-tbl -->
		</div><!-- container -->
	</div><!-- slider-main -->
	<style>
  #customers {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
  }

  #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
  }

  #customers tr:nth-child(even){background-color: #f2f2f2;}

  #customers tr:hover {background-color: #ddd;}

  #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
  }
  </style>
  <style>
  #customers2 {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
  }

  #customers2 td, #customers2 th {
      border: 1px solid #ddd;
      padding: 8px;
  }

  #customers2 tr:nth-child(even){background-color: #f2f2f2;}

  #customers2 tr:hover {background-color: #ddd;}

  #customers2 th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #26B99A;
      color: white;
  }
  </style>
  <style>
  #customers3 {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
  }

  #customers3 td, #customers2 th {
      border: 1px solid #ddd;
      padding: 8px;
  }

  #customers3 tr:nth-child(even){background-color: #f2f2f2;}

  #customers3 tr:hover {background-color: #ddd;}

  #customers3 th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #FF3333;
      color: white;
  }
  </style>
  <script>
  // Accordion
  function myAccFuncPerson() {
      var x = document.getElementById("demoAccPerson");
      if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show"  ;
      } else {
          x.className = x.className.replace(" w3-show", "");
      }

  }

  // Click on the "Jeans" link on page load to open the accordion for demo purposes
  document.getElementById("myBtnSales").click();


  // Script to open and close sidebar
  function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("myOverlay").style.display = "block";
  }

  function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("myOverlay").style.display = "none";
  }
  </script>
  <script>
  // Accordion
  function myAccFuncProduct() {
      var x = document.getElementById("demoAccProduct");
      if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show"  ;
      } else {
          x.className = x.className.replace(" w3-show", "");
      }

  }

  // Click on the "Jeans" link on page load to open the accordion for demo purposes
  document.getElementById("myBtnSales").click();


  // Script to open and close sidebar
  function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("myOverlay").style.display = "block";
  }

  function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("myOverlay").style.display = "none";
  }
  </script>
  <script>
    // Accordion
    function myAccFunc() {
        var x = document.getElementById("demoAcc");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show"  ;
        } else {
            x.className = x.className.replace(" w3-show", "");
        }

    }

    // Click on the "Jeans" link on page load to open the accordion for demo purposes
    document.getElementById("myBtn").click();


    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
    </script>
	<script>
    // Accordion
    function myAccFunc2() {
        var x = document.getElementById("demoAccSales");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show"  ;
        } else {
            x.className = x.className.replace(" w3-show", "");
        }

    }

    // Click on the "Jeans" link on page load to open the accordion for demo purposes
    document.getElementById("myBtnSales").click();


    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
    </script>
	<script>
    // Accordion
    function myAccFuncDoc() {
        var x = document.getElementById("demoAccDoc");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show"  ;
        } else {
            x.className = x.className.replace(" w3-show", "");
        }

    }

    // Click on the "Jeans" link on page load to open the accordion for demo purposes
    document.getElementById("myBtnSales").click();


    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
    </script>

	<style>
    .w3-sidebar a {font-family: "Roboto", sans-serif}
    body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
  </style>
  
  <style>
    .w3-sidebar a {font-family: "Roboto", sans-serif}
    body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
  </style>
  <style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>


  
	<div class="w3-display-container w3-container">
	  
	  <div>
		<ul class="nav nav-tabs" id="myTab" role="tablist">
		  <li class="nav-item"><a class="nav-link active" id="weekly-tab" data-toggle="tab" href="#weekly" role="tab" aria-controls="weekly" aria-selected="true">Weekly</a></li>
		  <li class="nav-item"><a class="nav-link" id="monthly-tab" data-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="false">Monthly</a></li>
		</ul>
	  </div>
	</div>
	
	<div class="container tab-content" id="myTabContent">
<div class="tab-pane fade show active container" id="weekly" role="tabpanel" aria-labelledby="weekly-tab">
  <h3 class="w3-center">Sales for Customers</h3>
  <canvas id="mybarChart"></canvas>
  <hr>
  <div class="row">
  <div class="col-sm-6">
  <table class="table table-striped" id="customers">
    <thead>
      <tr>
        <th colspan="2" class="w3-center">Corner Stationery</th>
      </tr>
    </thead>
    <tbody class="w3-center">
      <tr>
        <td>Week</td>
        <td>Sales</td>
      </tr>
      <tr>
	  
        <?php
        require_once "config.php";
        $sql = "SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-11-01' and '2019-11-03' and customer_id = 1;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         $totall = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_week[0] = $total;
           ?>
        <td>1</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-11-04' and '2019-11-10' and customer_id = 1;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_week[1] = $total;
           ?>
        <td>2</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-11-11' and '2019-11-17' and customer_id = 1;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_week[2] = $total;
           ?>
        <td>3</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-11-18' and '2019-11-24' and customer_id = 1;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_week[3] = $total;
           ?>
        <td>4</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-11-25' and '2019-11-30' and customer_id = 1;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_week[4] = $total;
           ?>
        <td>5</td>
        <td><?=$total?></td>
      </tr>
    </tbody>
  </table>
  <h3>Total sales this week : <?=$totall?> THB</h3>
  </div>
  <div class="col-sm-6">
  <table class="table table-striped" id="customers2">
    <thead>
      <tr>
        <th colspan="2" class="w3-center">B2S</th>
      </tr>
    </thead>
    <tbody class="w3-center">
      <tr>
        <td>Week</td>
        <td>Sales</td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-11-01' and '2019-11-03' and customer_id = 2;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         $totall = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_totalbar_week[0] = $total;
           ?>
        <td>1</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
       require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-11-04' and '2019-11-10' and customer_id = 2;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_totalbar_week[1] = $total;
           ?>
        <td>2</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-11-11' and '2019-11-17' and customer_id = 2;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_totalbar_week[2] = $total;
           ?>
        <td>3</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-11-19' and '2019-11-24' and customer_id = 2;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_totalbar_week[3] = $total;
           ?>
        <td>4</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-11-25' and '2019-11-30' and customer_id = 2;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_totalbar_week[4] = $total;
           ?>
        <td>5</td>
        <td><?=$total?></td>
      </tr>
    </tbody>
  </table>
  <h3>Total sales this week : <?=$totall?> THB</h3>
  </div>
  <div class="col-sm-6">
  <table class="table table-striped" id="customers3">
    <thead>
      <tr>
        <th colspan="2" class="w3-center">CWArt</th>
      </tr>
    </thead>
    <tbody class="w3-center">
      <tr>
        <td>Week</td>
        <td>Sales</td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-11-01' and '2019-11-03' and customer_id = 3;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         $totall = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_warm_week[0] = $total;
           ?>
        <td>1</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-11-04' and '2019-11-10' and customer_id = 3;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_warm_week[1] = $total;
           ?>
        <td>2</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-11-11' and '2019-11-17' and customer_id = 3;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_warm_week[2] = $total;
           ?>
        <td>3</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-11-18' and '2019-11-24' and customer_id = 3;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_warm_week[3] = $total;
           ?>
        <td>4</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-11-25' and '2019-11-30' and customer_id = 3;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_warm_week[4] = $total;
           ?>
        <td>5</td>
        <td><?=$total?></td>
      </tr>
    </tbody>
  </table>
  <h3>Total sales this week : <?=$totall?> THB</h3>
  </div>
  </div>
</div>

<!-- -------------------------------------------------------------------------------------------------- -->

<div class="tab-pane fade container" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
  <h3 class="w3-center">Sales for Customers</h3>
  <canvas id="mybarChartt"></canvas>
  <hr>
  <div class="row">
  <div class="col-sm-6">
  <table class="table table-striped" id="customers">
    <thead>
      <tr>
        <th colspan="2" class="w3-center">Corner Stationery</th>
      </tr>
    </thead>
    <tbody class="w3-center">
      <tr>
        <td>Month</td>
        <td>Sales</td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-01-01' and '2019-01-31' and customer_id = 1;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         $totall = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_month[0] = $total;
           ?>
        <td>1</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-02-01' and '2019-02-28' and customer_id = 1;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_month[1] = $total;
           ?>
        <td>2</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-03-01' and '2019-03-31' and customer_id = 1;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_month[2] = $total;
           ?>
        <td>3</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-04-01' and '2019-04-30' and customer_id = 1;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_month[3] = $total;
           ?>
        <td>4</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-05-01' and '2019-05-31' and customer_id = 1;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_month[4] = $total;
           ?>
        <td>5</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-06-01' and '2019-06-30' and customer_id = 1;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_month[5] = $total;
           ?>
        <td>6</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-07-01' and '2019-07-31' and customer_id = 1;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_month[6] = $total;
           ?>
        <td>7</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-08-01' and '2019-08-31' and customer_id = 1;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_month[7] = $total;
           ?>
        <td>8</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-09-01' and '2019-09-30' and customer_id = 1;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_month[8] = $total;
           ?>
        <td>9</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-10-01' and '2019-10-31' and customer_id = 1;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_month[9] = $total;
           ?>
        <td>10</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-11-01' and '2019-11-30' and customer_id = 1;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_month[10] = $total;
           ?>
        <td>11</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-12-01' and '2019-12-31' and customer_id = 1;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_month[11] = $total;
           ?>
        <td>12</td>
        <td><?=$total?></td>
      </tr>
    </tbody>
  </table>
  <h3>Total sales this month : <?=$totall?> THB</h3>
  </div>
  <div class="col-sm-6">
  <table class="table table-striped" id="customers2">
    <thead>
      <tr>
        <th colspan="2" class="w3-center">B2S</th>
      </tr>
    </thead>
    <tbody class="w3-center">
      <tr>
        <td>Week</td>
        <td>Sales</td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-01-01' and '2019-01-31' and customer_id = 2;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         $totall = 0 ;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_totalbar_month[0] = $total;
           ?>
        <td>1</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-02-01' and '2019-02-28' and customer_id = 2;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_totalbar_month[1] = $total;
           ?>
        <td>2</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-03-01' and '2019-03-31' and customer_id = 2;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }$totall = $totall + $total;
          }
          $show_totalbar_month[2] = $total;
           ?>
        <td>3</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-04-01' and '2019-04-30' and customer_id = 2;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }$totall = $totall + $total;
          }
          $show_totalbar_month[3] = $total;
           ?>
        <td>4</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-05-01' and '2019-05-31' and customer_id = 2;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }$totall = $totall + $total;
          }
          $show_totalbar_month[4] = $total;
           ?>
        <td>5</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-06-01' and '2019-06-30' and customer_id = 2;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }$totall = $totall + $total;
          }
          $show_totalbar_month[5] = $total;
           ?>
        <td>6</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-07-01' and '2019-07-31' and customer_id = 2;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }$totall = $totall + $total;
          }
          $show_totalbar_month[6] = $total;
           ?>
        <td>7</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-08-01' and '2019-08-31' and customer_id = 2;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }$totall = $totall + $total;
          }
          $show_totalbar_month[7] = $total;
           ?>
        <td>8</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-09-01' and '2019-09-30' and customer_id = 2;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }$totall = $totall + $total;
          }
          $show_totalbar_month[8] = $total;
           ?>
        <td>9</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-10-01' and '2019-10-30' and customer_id = 2;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }$totall = $totall + $total;
          }
          $show_totalbar_month[9] = $total;
           ?>
        <td>10</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-11-01' and '2019-11-30' and customer_id = 2;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }$totall = $totall + $total;
          }
          $show_totalbar_month[10] = $total;
           ?>
        <td>11</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-12-01' and '2019-12-31' and customer_id = 2;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }$totall = $totall + $total;
          }
          $show_totalbar_month[11] = $total;
           ?>
        <td>12</td>
        <td><?=$total?></td>
      </tr>
    </tbody>
  </table>
  <h3>Total sales this month : <?=$totall?> THB</h3>
  </div>
  <div class="col-sm-6">
  <table class="table table-striped" id="customers3">
    <thead>
      <tr>
        <th colspan="2" class="w3-center">CWArt </th>
      </tr>
    </thead>
    <tbody class="w3-center">
      <tr>
        <td>Month</td>
        <td>Sales</td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-01-01' and '2019-01-31' and customer_id = 3;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         $totall = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_warm_month[0] = $total;
           ?>
        <td>1</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-02-01' and '2019-02-28' and customer_id = 3;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_warm_month[1] = $total;
           ?>
        <td>2</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-03-01' and '2019-03-31' and customer_id = 3;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_warm_month[2] = $total;
           ?>
        <td>3</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-04-01' and '2019-04-30' and customer_id = 3;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_warm_month[3] = $total;
           ?>
        <td>4</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-05-01' and '2019-05-31' and customer_id = 3;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_warm_month[4] = $total;
           ?>
        <td>5</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-06-01' and '2019-06-30' and customer_id = 3;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_warm_month[5] = $total;
           ?>
        <td>6</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-07-01' and '2019-07-31' and customer_id = 3;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_warm_month[6] = $total;
           ?>
        <td>7</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-08-01' and '2019-08-31' and customer_id = 3;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_warm_month[7] = $total;
           ?>
        <td>8</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-09-01' and '2019-09-30' and customer_id = 3;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_warm_month[8] = $total;
           ?>
        <td>9</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-10-01' and '2019-10-31' and customer_id = 3;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_warm_month[9] = $total;
           ?>
        <td>10</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-11-01' and '2019-11-30' and customer_id = 3;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_warm_month[10] = $total;
           ?>
        <td>11</td>
        <td><?=$total?></td>
      </tr>
      <tr>
        <?php
        require_once "config.php";
        $sql = "
                 SELECT *
                 FROM good_issue INNER JOIN document_sd USING(doc_id)
                 WHERE good_issue_date between '2019-12-01' and '2019-12-31' and customer_id = 3;
                 ";
         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $net_total = 0;
         $total = 0;
         if(mysqli_num_rows($result))
         {
           while($row = mysqli_fetch_assoc($result))
           {
             $net_total =$row['net_total'];
             $total = $total + $net_total;
            }
            $totall = $totall + $total;
          }
          $show_total_warm_month[11] = $total;
           ?>
        <td>12</td>
        <td><?=$total?></td>
      </tr>
    </tbody>
  </table>
  <h3>Total sales this month : <?=$totall?> THB</h3>
  </div>
  </div>
</div>
</div>
	
	
	<footer class="bg-191 color-ash pt-50 pb-20 text-left center-sm-text">
		
		<div class="container-fluid">
			<div class="row">
			
				<div class="col-lg-1"></div>
				
				<div class="col-md-4 col-lg-6 mb-30">
					<div class="card h-100">
						<div class="dplay-tbl">
							<div class="dplay-tbl-cell">
							
								<h3>APPLE PEN </h3>
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