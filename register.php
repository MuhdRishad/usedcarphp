<?php

$host_name="localhost";
$user_name="root";
$password="";
$db_name="used_cars";
$conn=mysqli_connect($host_name,$user_name,$password,$db_name);

if(!$conn){
die("Error" . mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $confirmEmail= $_POST['cemail'];
    $password= $_POST['password'];
    $verifyPassword= $_POST['vpassword'];
    $mobileNumber=$_POST['mobileNumber'];
    $phoneNumber=$_POST['phoneNumber'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $address=$_POST['address'];
    $pinCode=$_POST['pin'];
}

$sql ="INSERT INTO registration (name,email,confirmEmail,password,verifyPassword,mobileNo,phoneNo,state,city,address,pinCode) VALUES ('$name','$email','$confirmEmail','$password','$verifyPassword','$mobileNumber','$phoneNumber','$state','$city','$address','$pinCode')"; 
if(mysqli_query($conn,$sql)){
    header("location:login.php");

}else{
    echo "Error" .mysqli_error($conn);
}

?>
