<?php  
    if(!isset($_SESSION))
    {
        session_start();
    }
    require_once "config.php";
		
?>


<html lang=en>

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
                                <h2 class="mt-20 mb-30"><b>PROCUREMENT</b></h2>
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
                    <h4 class="mb-30 mt-20 clearfix"><b>PROCUREMENT</b></h4>
                    <br>
                    <?php
                    
                        $userqueryproduct = "SELECT * FROM product group by product_id" ;
                        $product = mysqli_query($connect,$userqueryproduct);
                        // $userqueryproduct2 = "SELECT material_id,sum(material_stock) from product_material join material using (material_id) join inventory using(material_id) group by material_id" ;
                        // $procurement = mysqli_query($connect,$userqueryproduct2);
                        // $material_stock[] = 0;
                        // while ($data2 = mysqli_fetch_assoc($procurement))
                        // {
                            
                        // }
                        
                    ?>
                    <div class="row">
                        <div class="col-xl-2"></div>
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                                <!-- FORM PR -->
                                <form method="get" action="add_procurement.php">
                                    <table cellspacing ="0" border="1">
                                        <tr>
                                            <th>Product Name</th><th>Qty.</th>
                                        </tr>
                                        <?php
                                            $i=0;
                                            $min=0;
                                            //var_dump($material);
                                            while ($data = mysqli_fetch_array($product))
                                            {
                                                $p_id = $data['product_id'];
                                                $userqueryproduct2 = "SELECT material_id,sum(material_stock) as sumM,product_id from product_material join material using (material_id) join inventory using(material_id) where product_id = '$p_id' GROUP BY material_id" ;
                                                $procurement = mysqli_query($connect,$userqueryproduct2);
                                            
                                                while ($data2 = mysqli_fetch_array($procurement))
                                                {
                                                    if($min==0){
                                                        $min = $data2['sumM'];
                                                    }
                                                    if($min  >= $data2['sumM']){
                                                        $min = $data2['sumM'];
                                                    }
                                                    
                                                    
                                                }
                                                //print_r($data);
                                                echo "<tr>
                                                        <td><input type=\"hidden\" name=\"product_id[]\" value=\"".$data['product_id']."\">".$data['product_name']."</td>
                                                        <td><input type=\"number\" name=\"qty[]\" min=\"0\" max=\"$min\"></td>
                                                        
                                                        
                                                        <td>Max product is $min <br>(refer to materials)</td>
                                                    </<tr>";
                                                $min = 0;
                                            }
                                            //print_r($data);
                                        ?>
                                        
                                    </table>
                                    <button class="btn-b-lg btn-brdr-grey plr-25 color-ash" type="submit"><b>GO</b></button>
                                </form>
                                
                            </div><!-- col-sm-6-->	
                        <!-- END FORM -->
                    </div><!-- row -->
                </div><!-- col-sm-3 -->
            </div><!-- row -->
        </div><!-- container -->
    </section>
                    
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