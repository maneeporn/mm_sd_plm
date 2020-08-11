<?php

	require_once "config.php";

	$userquery2="SELECT * FROM product ";
	$result2=mysqli_query($connect,$userquery2);
	$product = mysqli_fetch_assoc($result2);

	$sale=$_GET['doc_id'];


					$company=$_GET['company_id'];

					$customer=$_GET['customer_id'];
					$ship_detail=$_GET['ship_detail'];

					$doc_date=$_GET['doc_date'];
					$employee=$_GET['employee_id'];

					$product_ids=$_GET['product_id'];
					$quantitys=$_GET['quantity'];

					$prices = $_GET['product_price'];

					// var_dump($product_ids);
					// var_dump($quantitys);
					// var_dump($prices);
					$userQuery_inq="insert into document_sd(`doc_sd_type_id`,company_id,customer_id,employee_id,ref_id,doc_date,ship_detail)
					VALUES (4,$company,$customer,$employee,$sale,'$doc_date','$ship_detail')";
					$result=mysqli_query($connect,$userQuery_inq);

					for ($i=0; $i < count($product_ids); $i++){
						$userupdatestock = "update product set product_qty = (product_qty-$quantitys[$i])  where product_id = '{$product_ids[$i]}'";
								$updatestock = mysqli_query($connect,$userupdatestock);
				}


						if(isset($result))
						{
							require_once "invoice.php";
						}

					//
					// 	$userquery1="SELECT * FROM item_list
					// 	join document_sd on item_list.doc_id = document_sd.doc_id
					// 	join product on item_list.product_id = product.product_id";
					// 	$result1=mysqli_query($connect,$userquery1);
					//
					// 	$userquery="SELECT * FROM product ";
					// 	$result=mysqli_query($connect,$userquery);
					// 	$pro = mysqli_fetch_assoc($result);
					//
					// $product_ids = $_GET['product_id'];
					// $quantities = $_GET['qty'];
					// $prices = $_GET['product_price'];
					//
					// $products = [];
					// for ($i=0; $i < count($product_ids); $i++) {
					// 	$products[] = [
					// 		'product_id' => $product_ids[$i],
					// 		'qty' => (int)$quantities[$i],
					// 		'product_price' => (float) $prices[$i],
					// 	];
					// }
					//
					// foreach ($products as $product) {
					//
					// 	$net =	$pro['qty']-$product['qty'];
					//
					// 	echo $products['product_id']."  ".$net;

						// $userQuery_inq="UPDATE product SET product_qty='$net'	WHERE product_id='{$product['product_id']}'";
						// $result=mysqli_query($connect,$userQuery_inq);


				// }
				// item id cut stock
				//

?>
