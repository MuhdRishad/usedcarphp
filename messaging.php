<?php
session_start();
$receiverID=$_SESSION['userid'];
$conn=mysqli_connect("localhost","root","","used_cars");
if(!$conn){
    die("Connection error" . mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $message=$_POST['message'];
    $messagerName=$_SESSION['username'];
    $messagerNumber=$_SESSION['mobileNo'];
}

$sql = "INSERT INTO messages (message,name,phone,receiverID) VALUES ('$message',' $messagerName','$messagerNumber','$receiverID')";
if(mysqli_query($conn,$sql)){
    header("location:home_page.php");
}else{
    echo "error" . mysqli_error($conn);
}
?>