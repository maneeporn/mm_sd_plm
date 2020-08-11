<?php
session_start();
require_once "config.php";
$user = $_GET['user'];
$pass = $_GET['pass'];
$sql="SELECT * FROM customer WHERE customer_email ='$user' AND customer_pw ='$pass'";
$query = mysqli_query($connect,$sql);
if(mysqli_num_rows($query)>0)
{
	$row = mysqli_fetch_assoc($query);
	$a1 = $row['customer_name'];
	//$p = $row['login_pw'];
	header("Location:test.php");
}
else
{
	//$_SESSION['warning']='Username or password are not correct.Please try again !!';
	$message = "Username or password are not correct.Please try again !!";
    echo "<script type='text/javascript'>alert('$message');</script>";
	//header("Location:login.php");

}
mysqli_close($connect);

?>