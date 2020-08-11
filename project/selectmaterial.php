<?php  
    if(!isset($_SESSION))
    {
        session_start();
    }
    require_once "config.php";

    $RequestedBy = $_POST['RequestedName'];
    $Date= $_POST['Date'];
    $Dateneed = $_POST['DateWant'];
    $VendorID = $_POST['VendorID'];
    $_SESSION['ShipVia']= $_POST['ShipVia'];
    
    $queryemployee = "SELECT * FROM employee where employee_name = \"".$RequestedBy."\"" ;
    $employee = mysqli_query($connect,$queryemployee);
    while ($em = mysqli_fetch_assoc($employee)){
        $employee_id = $em['employee_id'];
    }
		
    $userquerypurchaserequisition = "Insert into applepen.purchase_requisition (vendor_id,employee_id,company_id,pr_date,pr_dateneed) VALUES ('$VendorID','$employee_id','1','$Date','$Dateneed') ";
    $purchaserequisition = mysqli_query($connect,$userquerypurchaserequisition);
    //print_r($userquerypurchaserequisition);
    
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

<body>
<?php 
require_once "header.php";
?>
    
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
                    <br>
                    <h4 class="mb-30 mt-20 clearfix"><b>SELECT MATERIAL</b></h4>
                    <?php
                    
                        $userqueryinventory = "SELECT * FROM applepen.inventory join material using(material_id) where vendor_id =\"".$VendorID."\"";
                        $inventory = mysqli_query($connect,$userqueryinventory);
                    ?>
                    <div class="row">
                        <div class="col-xl-2"></div>
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                                <!-- FORM PR -->
                                <form method="post" action="add_pr.php">
                                    <table cellspacing ="0" border="1">
                                        <tr>
                                            <th>Material Number</th><th>Material Name</th><th>Qty.</th><th>Unit Price</th>
                                        </tr>
                                        <?php
                                            //var_dump($material);
                                            while ($data = mysqli_fetch_assoc($inventory))
                                            {
                                                //print_r($data);
                                                echo "<tr>
                                                        <td><input type=\"hidden\" name=\"material_id[]\" value=\"".$data['material_id']."\">".$data['material_id']."</td>
                                                        <td><input type=\"hidden\" name=\"inventory_id[]\" value=\"".$data['inventory_id']."\">".$data['material_name']."</td>
                                                        <td><input type=\"text\" name=\"qty[]\"></td>
                                                        <td><input type=\"hidden\" >".$data['material_price']."</td>
                                                    </<tr>";
                                            }
                                            //print_r($data);
                                        ?>
                                        
                                    </table>
                                    <button class="btn-b-lg btn-brdr-grey plr-25 color-ash" type="submit"><b>approve</b></button>
                                </form>
                            </div><!-- col-sm-6-->	
                        <!-- END FORM -->
                    </div><!-- row -->
                </div><!-- col-sm-3 -->
            </div><!-- row -->
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
                            
                                <a href="#"><img src="images/logo-white.png"></a>
                                <p class="color-ash mt-25"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                            </div><!-- dplay-tbl-cell -->
                        </div><!-- dplay-tbl -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->
                
                <div class="col-md-4 col-lg-2 mb-30">
                    <div class="card h-100">
                        <div class="dplay-tbl">
                            <div class="dplay-tbl-cell">
                            
                                <ul class="list-a-plr-10">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                </ul>
                                
                            </div><!-- dplay-tbl-cell -->
                        </div><!-- dplay-tbl -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->
            </div><!-- row -->
        </div><!-- container -->
    </footer>
        
</body>

</html>