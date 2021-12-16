<?php
$db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "pglife";

    $conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

    if(mysqli_connect_error()){
        echo "Failed to connect to MySQL ! Please Contact the Admin."  ;
        exit;
    }
?>
