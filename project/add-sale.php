<?php

	require_once "config.php";

				$inquiry_id=$_GET['doc_id'];

				$company=$_GET['company_id'];
			 	$customer=$_GET['customer_id'];
				$employee=$_GET['employee_id'];


			 	$doc_date=$_GET['doc_date'];
				$description=$_GET['description'];

				$subtotal=$_GET['subtotal'];
				$discount=$_GET['discount'];
				$nettotal=$_GET['nettotal'];


				$ship_detail=$_GET['ship_detail'];
			 	$term=$_GET['term'];

			 	$requested_date=$_GET['request_delivery_date'];



			 	$userQuery_inq="insert into document_sd(doc_sd_type_id,company_id,customer_id,employee_id,ref_id,doc_date,description,sub_total,discount,net_total,ship_detail,term,request_delivery_date)
			 	VALUES (3,$company,$customer,$employee,$inquiry_id,'$doc_date','$description',$subtotal,$discount,$nettotal,'$ship_detail','$term','$requested_date')";
			 		$result=mysqli_query($connect,$userQuery_inq);
					// echo $userQuery_inq;
				if(isset($result))
				 {
				require_once "goodsissue.php";
					}
?>
