<?php
session_start();
$userID=$_SESSION['user_id'];
$conn=mysqli_connect("localhost","root","","used_cars");
if(!$conn){
    die("Connection error" . mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mobileNumber=$_POST['mobileNumber'];
    $phoneNumber=$_POST['phoneNumber'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $address=$_POST['address'];
    $pinCode=$_POST['pin'];
    $password=$_POST['password'];
    $email=$_POST['email'];

}


$query = "UPDATE registration SET name='$name',mobileNo='$mobileNumber',phoneNo='$phoneNumber', state='$state',city='$city',address='$address',pinCode='$pinCode',password='$password',email='$email' WHERE id='$userID'";
if(mysqli_query($conn,$query)){
header("location:home_page.php");
}else{
echo "Error". mysqli_error($conn);
}
?>


