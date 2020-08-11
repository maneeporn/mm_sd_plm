<?php
    require_once "config.php";

    $routing_name = $_POST['routing_name'];
    
    $userQuery = "INSERT INTO applepen.routing (routing_name) VALUES ('$routing_name')" ;
    $result = mysqli_query($connect,$userQuery);
    if(isset($result)){
        header("Location:display_procurement.php");
    }
?>