<?php

session_start();
$userID=$_SESSION['user_id'];
$conn=mysqli_connect("localhost","root","","used_cars");
if(!$conn){
    die("Connection error" . mysqli_connect_error());
}

$sql = "SELECT * FROM messages WHERE receiverID='$userID'";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <style>
            body{
            background-image: url("./image/frontpage.jpg");
            }
           h2{
            color: red;
            text-align: center;
            margin-top: 50px;
            font-size: 40px;
           } 
           table{
               border-collapse: separate;
               border-spacing: 0 10px;
               margin-left: auto;
               margin-right: auto;
               width: 50%;
           }
          th{
               border-left: 1px solid white;
               border-right: 1px solid white;
               padding:8px;
               background-color: grey;
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
        <h2>MESSAGES</h2>
           <table>
        <?php

                if(mysqli_num_rows($result)>0){
                  while($row=mysqli_fetch_assoc($result)){
                      echo "";
                ?>
            
                <tr class="one">
                    <th><?php echo $row['name'];?></th>
                    <th><?php echo $row['phone'];?></th>
                    <th><?php echo $row['message']. "<br>";?></th>
                  </tr>
           
                <?php
                  }
                }else{
                    echo " " . mysqli_error($conn);
                }
                ?>
      
            </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>

