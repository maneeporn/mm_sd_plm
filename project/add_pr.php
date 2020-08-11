<?php
	if(!isset($_SESSION))
    {
        session_start();
    }
	require_once "config.php";
    
    $shipvia = $_SESSION['ShipVia'];
    
    $querypr_id = "SELECT * FROM applepen.purchase_requisition ORDER BY pr_id DESC LIMIT 1";
    $purchase_id = mysqli_query($connect,$querypr_id);
    while ($pr_id = mysqli_fetch_assoc($purchase_id)){
        $pr_idd = $pr_id['pr_id'];
    }
  
    //print_r($pr_idd);
    

    $i=0;
    foreach($_POST['qty'] as $key => $qty)
    {
        if (!empty($qty)) 
        {
             $array['qty'][$i] = $qty; 
             $i++;
        }
    }
    $i=0;
    foreach($_POST['material_id'] as $key => $id)
    {
        if (!empty($id)) 
        {
             $array['id'][$i] = $id; 
             $i++;
        }
    }
    $i=0;
    foreach($_POST['inventory_id'] as $key => $inventory_id){
        if (!empty($inventory_id)) 
        {
             $array['in_id'][$i] = $inventory_id; 
             $i++;
        }
    }
    $i=0;
    foreach($array['id'] as $key){
        if (!empty($key)) 
        {
           $idd[$i] = $key;
           $i++;
        }
    }
    $i=0;
    foreach($array['qty'] as $key){
        if (!empty($key)) 
        {
           $qtyy[$i] = $key;
           $i++;
        }
    }
    
    $i=0;
    foreach($array['in_id'] as $key){
        if (!empty($key)) 
        {
           $inventory_idd[$i] = $key;
           $i++;
        }
    }
//print_r($array);
    $i=0;
    
    while($i < count($qtyy))
    {
       if($qtyy[$i]!=0){

            $userqueryprdetail = "insert into applepen.purchase_requisition_detail (inventory_id,pr_id,pr_qty) VALUES ('$inventory_idd[$i]','$pr_idd','$qtyy[$i]')";
            //print_r($userqueryprdetail);
            $queryprdetail = mysqli_query($connect,$userqueryprdetail);
        }
        else{
            break;
        }
        $i++;
    }


    if(isset($queryprdetail)){
        require_once "display_pr.php";
    }
   
    
?>


    
    
    
 


