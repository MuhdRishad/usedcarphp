<?php

session_start();
$userID=$_SESSION['user_id'];
$row_id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","used_cars");
if(!$conn){
    die("Connection error" . mysqli_connect_error());
}
$sql = "DELETE sell_car1,sell_car2 FROM sell_car1 INNER JOIN sell_car2 ON sell_car1.CarID = sell_car2.last_id WHERE last_id = '$row_id'";
if(mysqli_query($conn,$sql)){
    header("location:home_page.php");
}else{
    echo "error". mysqli_error($conn);
}
?>