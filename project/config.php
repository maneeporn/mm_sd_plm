<?php
$server = "localhost";
$user = "root";
$password = "root";
$dbname = "applepen";

$connect = mysqli_connect($server,$user,$password,$dbname);
if (!$connect)
{
    die ("ERROR: Cannot connect to the database 
	$dbname on server $server using username $user (" .mysqli_connect_error().")");
}

mysqli_query($connect,"SET NAMES UTF8");
?>