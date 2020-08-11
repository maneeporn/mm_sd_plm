<?php
	require_once "config.php";

	$id = $_GET['id'];
    
    $userquery = "Delete from operation where operation_id = $id";
	$result = mysqli_query($connect,$userquery);
    if ($result)
    {
        header("Location:display_procurement.php");
    }
        

?>