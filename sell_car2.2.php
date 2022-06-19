<?php
session_start();
$host_name="localhost";
$user_name="root";
$password="";
$db_name="used_cars";

$conn=mysqli_connect($host_name,$user_name,$password,$db_name);
if(!$conn){
    die("Error on conecting" . mysqli_connect_error());
}

if(isset($_POST['btn2'])){
   
    $image=$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],"photo/".$image);
    $fuelType=$_POST['fueltype'];
    $colour=$_POST['colour'];
    $registrationNo=$_POST['reg_no'];
    $insuranceValid=$_POST['insurence'];
    $note=$_POST['note'];
    $last_id=$_SESSION['lastrow'];
    $user_id= $_SESSION['user_id'];

    $sql = "INSERT INTO sell_car2 (image,fuelType,color,registrationNo,insureDate,note,last_id,userID) VALUES ('$image','$fuelType','$colour','$registrationNo','$insuranceValid','$note','$last_id',' $user_id')";
if(mysqli_query($conn,$sql)){
    header("location:home_page.php");
}else{
    echo "Error on inserting data" . " " . mysqli_error($conn);
}
}


?>