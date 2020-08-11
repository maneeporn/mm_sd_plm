<?php
    require_once "config.php";

    $routing_name = $_POST['routing_name'];
    $work_center_name = $_POST['work_center_name'];
    $operation_time = $_POST['operation_time'];
    $operation_description = $_POST['operation_description'];

    $userQueryrouting  = "SELECT * FROM routing where routing_name = '$routing_name'";
    $Queryrouting = mysqli_query($connect,$userQueryrouting);
    while ($routing = mysqli_fetch_assoc($Queryrouting)){ 
        $routing_id = $routing['routing_id'];
    }

    $userQuerywork  = "SELECT * FROM work_center where work_center_name = '$work_center_name'";
    $Querywork = mysqli_query($connect,$userQuerywork);
    while ($work = mysqli_fetch_assoc($Querywork)){ 
        $work_center_id = $work['work_center_id'];
    }


    $userQuery = "INSERT INTO operation (routing_id,work_center_id,operation_time,operation_description) VALUES ('$routing_id','$work_center_id','$operation_time','$operation_description')" ;
    $result = mysqli_query($connect,$userQuery);
    if(isset($result)){
        header("Location:display_procurement.php");
    }
?>