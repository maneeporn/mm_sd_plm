<?php
	require_once "config.php";

	$id = $_GET['id'];
    
    $userquery = "Delete from work_center where work_center_id = $id";
	$result = mysqli_query($connect,$userquery);
    if ($result)
    {
        header("Location:display_procurement.php");
    }
?>