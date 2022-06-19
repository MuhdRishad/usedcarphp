<?php
    session_start();
    $host_name="localhost";
    $user_name="root";
    $password="";
    $db_name="used_cars";

    $conn=mysqli_connect($host_name,$user_name,$password,$db_name);
    if(!$conn){
        die("Error on coonecting" . mysqli_connect_error());
    }

    if(isset($_POST['btn1'])){
        $place =$_POST['place'];
        $postalCode =$_POST['postcode'];
        $mgf_year =$_POST['year'];
        $company =$_POST['company'];
        $model =$_POST['model'];
        $kmsDriven =$_POST['kms'];
        $owners =$_POST['owners'];
        $prize =$_POST['prize'];
        $userName =$_POST['uname'];
        $number =$_POST['number'];
        $email =$_POST['mail'];
       
    }

    $sql = "INSERT INTO sell_car1 (city,pinCode,mgf_year,company,model,kms_driven,owners,prize,name,mobileNo,emailID)   VALUES ('$place' , '$postalCode' , '$mgf_year' , '$company', '$model' , '$kmsDriven' , '$owners' , '$prize' , '$userName' , '$number' , '$email')";
    if(mysqli_query($conn,$sql)){
       $last_data=mysqli_insert_id($conn);
       $_SESSION['lastrow']=$last_data;
       header("location:sell_car2.php");
    }else{
       echo "Error" . mysqli_error($conn);
    }

?>