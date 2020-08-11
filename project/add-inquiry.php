<?php
	require_once "config.php";
			  $customer=$_GET['customer_id'];
			  $doc_date=$_GET['doc_date'];
			  $employee=$_GET['employee_id'];
			  $description=$_GET['description'];
			  $company=$_GET['company_id'];
			  //echo $customer ;
$userQuery_inq="INSERT into document_sd (`doc_sd_type_id`,company_id,customer_id,employee_id,`ref_id`,doc_date,`description`)
VALUES (1,$company,$customer,$employee,null,'$doc_date','$description')";
$result=mysqli_query($connect,$userQuery_inq);
		if(isset($result))
		{
			require_once "item_list.php";
		}

?>
