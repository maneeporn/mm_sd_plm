<?php
	session_unset();
	if (session_status() == PHP_SESSION_NONE) 
	{
	  session_start();
	}
	require_once "config.php";

	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$sql="SELECT * FROM employee WHERE username = '$user' AND password = '$pass' ";
	$query = mysqli_query($connect,$sql);

	if(mysqli_num_rows($query) > 0)
	{
		header("Location:01_index.php");
	}
	else
	{
		header("Location:index.html");
	}
?>
