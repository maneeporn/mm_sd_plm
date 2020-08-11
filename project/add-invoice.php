<?php

	require_once "config.php";

	$inquiry_id=$_GET['doc_id'];

					$customer=$_GET['customer_id'];
					$company=$_GET['company_id'];
					$employee=$_GET['employee_id'];

					$doc_date=$_GET['doc_date'];
					$req=$_GET['request_delivery_date'];

					$term=$_GET['term'];

					$subtotal=$_GET['subtotal'];
					$discount=$_GET['discount'];
					$nettotal=$_GET['nettotal'];

					$description=$_GET['description'];

					// echo 	$customer."/t".$company."/t".$doc_date."/t".$employee."/t".$term."<br>"
					// .$subtotal."/t".$discount."/t".$nettotal."<br>".$description;
//check แล้ว ไม่เข้า
					$userQuery_inq="insert into document_sd
					(`doc_sd_type_id`,company_id,customer_id,employee_id,`ref_id`,doc_date,description,sub_total,discount,net_total,term)
					VALUES (5,$company,$customer,$employee,$inquiry_id,'$doc_date','$description',$subtotal,$discount,$nettotal,'$term')";
					$result=mysqli_query($connect,$userQuery_inq);


				if(isset($result))
				{
					require_once "success.php";
				}
?>
