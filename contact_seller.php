<?php

session_start();
$userID=$_SESSION['user_id'];
$row_id=$_GET['id'];
$_SESSION['userid']=$row_id;
$conn=mysqli_connect("localhost","root","","used_cars");
if(!$conn){
    die("Connection error" . mysqli_connect_error());
}
$sql ="SELECT * FROM sell_car1 INNER JOIN sell_car2 ON sell_car1.CarID=sell_car2.last_id WHERE last_id='$row_id'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
$rows=mysqli_fetch_assoc($result);
}else{
    echo "Error" . mysqli_error($conn);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
            body{
            background-image: url("./image/frontpage.jpg");
            }
       
        </style>
    </head>
    <body>
    <div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center text-danger my-3" style="font-size:60px">
                <b>USED CAR</b>
            </h1>
        </div>
    </div>
        <ul class="my-5">
            <li id="a"><a href="home_page.php" class="text-white text-decoration-none">Home</a></li>
            <li id="b" class="ms-5"><a href="used_car_list.php" class="text-white text-decoration-none">My used car listing</a></li>
            <li id="c" class="ms-5"><a href="sell_car1.php" class="text-white text-decoration-none">Sell your car</a></li>
            <li id="d" class="ms-5"><a href="enquiries.php" class="text-white text-decoration-none">Enquiries</a></li>
            <li id="e" class="ms-5"><a href="edit_profile.php" class="text-white text-decoration-none">Edit Profile</a></li>
            <li id="f" class="ms-5"><a href="view_list.php" class="text-white text-decoration-none">View full listing</a></li>
            <li id="g" class="ms-5"><a href="login.php" class="text-white text-decoration-none">Logout</a></li>
        </ul>
        
        
       <div class="row">
           <div class="col-lg-3"></div>
           <div class="col-lg-6">
           <h3 class="text-danger text-center">SEND MESSAGE</h3>
        <form action="messaging.php" method="POST">
            <div class="my-5 "> 
            <label class="text-white">Message:</label>
            <br>
            <textarea name="message"></textarea>
            <br><br>
            <input type="submit" name="submit" value="SENT" class="ms-5">
            </div>
        </form>
           </div>
           <div class="col-lg-3"></div>
       </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>

