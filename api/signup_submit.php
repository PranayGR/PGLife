<?php
    require("../includes/database_connect.php");

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //encryting password
    $password = sha1($password);
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $college_name = $_POST['college_name'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn,$sql);

    if (!$result){
        $response = array("success" => false, "message" => "Something went wrong!");
        echo json_encode($response);
        return;
        }

    $row_count = mysqli_num_rows($result);
    if($row_count != 0){
        $response = array("success" => false, "message" => "This Email is already Registered!");
        echo json_encode($response);
        return;
    }

    $sql = "INSERT INTO users(full_name,email,password,phone,gender,college_name) VALUES('$full_name','$email','$password','$phone','$gender','$college_name')";
    $result = mysqli_query($conn,$sql);

    if (!$result){
        $response = array("success" => false, "message" => "Something went wrong!");
        echo json_encode($response);
        return;
        }

    $response = array("success" => true, "message" => "Your Account has been created successfully!");
    echo json_encode($response);
        
    mysqli_close($conn);
    ?> 