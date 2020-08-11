<?php
require_once('config.php');
$product_id = $_GET['product_id'];
$qty = $_GET['qty'];
$stock = $_GET['stock'];
$mat_id = $_GET['mat_id'];
// print_r($product_id);
 print_r($qty);
 echo"<br>";
// print_r($stock);
$matstock2 = 0;
$vendor = 0;
$checkcon = 1;

for($i=0;$i<count($product_id);$i++)
{
    $userquery = "SELECT * FROM product_material WHERE product_id = '$product_id[$i]'" ;
    $query = mysqli_query($connect,$userquery);
    while ($data = mysqli_fetch_assoc($query))
    {
        $userquery1 = "SELECT * FROM material join product_material using(material_id) join inventory using(material_id) 
        WHERE material_id = '".$data['material_id']."' " ;
        $query1 = mysqli_query($connect,$userquery1);
        while ($data1 = mysqli_fetch_assoc($query1))
        {
            
            if($qty[$i]<$data1['material_stock'] && $matstock2 ==0 && $checkcon == 1){
                $vendor++;
                $matstock = $data1['material_stock']-$qty[$i];
                echo"." + " ".$data1['material_id']." . < : stock".$data1['material_stock']." - "."$qty[$i] .$matstock  ";
                $userquery3 = "UPDATE `inventory` SET `material_stock`= $matstock WHERE material_id = '".$data1['material_id']."' AND vendor_id = ".$data1['vendor_id']."" ;
                $query3 = mysqli_query($connect,$userquery3);
                $checkcon = 0;
            }
            else if($qty[$i]>$data1['material_stock']&& $matstock2 ==0){
                //600 > 500
                $vendor++;
                $matstock = 0;
                $matstock2 = $qty[$i]-$data1['material_stock'];
                echo $data1['material_id']."  > : stock".$data1['material_stock']." - "."$qty[$i] .$matstock2  ";
                $userquery4 = "UPDATE `inventory` SET `material_stock`= $matstock WHERE material_id = '".$data1['material_id']."' AND vendor_id = ".$data1['vendor_id']."" ;
                $query4 = mysqli_query($connect,$userquery4);
            }
            else if($matstock2 != 0){
                $vendor++;
                $eiei = $matstock2;
                $matstock2 = $data1['material_stock']-$matstock2;
                echo"  <2 : stock".$data1['material_stock']." - "."$eiei .$matstock2  ";
                $userquery5 = "UPDATE `inventory` SET `material_stock`= $matstock2 WHERE material_id = '".$data1['material_id']."' AND vendor_id = ".$data1['vendor_id']."" ;
                $query5 = mysqli_query($connect,$userquery5);
                $matstock2=0;
            }   
             echo"<br>";
             $vendor = 0;
        }
       
        $checkcon = 1;
        
    } 

    $userqueryproduct = "UPDATE `product` SET `product_qty`= product_qty + $qty[$i] WHERE `product_id` = '$product_id[$i]' " ;
    $queryproduct = mysqli_query($connect,$userqueryproduct);

}
header("Location:display_procurement.php");

?>