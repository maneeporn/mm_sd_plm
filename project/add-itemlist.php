<?php

	require_once "config.php";
	$userquery="SELECT doc_id FROM document_sd ORDER BY doc_id DESC limit 1";
	$result=mysqli_query($connect,$userquery);
	$doc_id = mysqli_fetch_assoc($result);
//ดึง.....*** id inquiry*****

$product_ids = $_POST['product_id'];
$quantities = $_POST['qty'];
$prices = $_POST['product_price'];

$products = [];
for ($i=0; $i < count($product_ids); $i++) {
	$products[] = [
		'product_id' => $product_ids[$i],
		'qty' => (int)$quantities[$i],
		'product_price' => (float) $prices[$i],
	];
}

$products = array_filter($products,function($product){
	return $product['qty'] > 0;
});

foreach ($products as $product) {
	if($product['product_id']=='AT0001')
	{
	$total= $product['qty'] * $product['product_price'];
	$total_dis=$total*0.05;
	$product['total_price'] =	$total-$total_dis;
  }
	else if($product['product_id']=='AT0005'){
		$total= $product['qty'] * $product['product_price'];
		$total_dis=$total*0.05;
		$product['total_price'] =	$total-$total_dis;
	}
	else{
		$product['total_price'] =	$product['qty'] * $product['product_price'];
	}
	$userQuery_inq="insert into item_list (product_id,quantity,doc_id,total)
	VALUES ('{$product['product_id']}','{$product['qty']}','{$doc_id['doc_id']}','{$product['total_price']}')";
	$result=mysqli_query($connect,$userQuery_inq);
}


if(isset($result))
{
	require_once "quotation.php";
}



	?>
