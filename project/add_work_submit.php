<?php
    require_once "config.php";

    $work_name = $_POST['work_name'];
    
    $userQuery = "INSERT INTO applepen.work_center (work_center_name) VALUES ('$work_name')" ;
    $result = mysqli_query($connect,$userQuery);
    if(isset($result)){
        header("Location:display_procurement.php");
    }
?>