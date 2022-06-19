<?php

    $host_name="localhost";
    $user_name="root";
    $password="";
    $db_name="used_cars";

    $conn=mysqli_connect($host_name,$user_name,$password,$db_name);
    if(!$conn){
        die("Error" . mysqli_connect_error());
    }

    $sql = "CREATE TABLE registration(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        confirmEmail VARCHAR(50) NOT NULL,
        password VARCHAR(20) NOT NULL,
        verifyPassword VARCHAR(20) NOT NULL,
        mobileNo INT(15) NOT NULL,
        phoneNo INT(15) NOT NULL,
        state VARCHAR(50) NOT NULL,
        city VARCHAR(50) NOT NULL,
        address VARCHAR(100) NOT NULL,
        pinCode INT(10) NOT NULL
    )";
    if(mysqli_query($conn,$sql)){
        echo "Table craeted successfully";
    }else{
        echo "Error on creating table" . mysqli_error($conn);
    }







?>