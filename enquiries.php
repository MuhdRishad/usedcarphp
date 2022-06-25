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
           .messages{
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
               width: 75%;
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
    <nav class="navbar navbar-expand-lg navbar-light sticky-top py-3" style="background-color: #120c2f">
    <div class="container">
      <a class="navbar-brand text-light" href="home_page.php"><h2><b>USED CARS</b></h2></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="home_page.php" >Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="used_car_list.php" >My posts</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="sell_car1.php" >Sell car</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="enquiries.php" >Enquiries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="edit_profile.php" >Edit profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="view_list.php" >All posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="login.php" >Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

      <div class="container-fluid">
          <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
              <h2 class="messages">MESSAGES</h2>
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
              </div>
              <div class="col-md-2"></div>
          </div>
      </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>

