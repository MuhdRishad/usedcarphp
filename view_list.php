<?php

session_start();
$userID=$_SESSION['user_id'];
$conn=mysqli_connect("localhost","root","","used_cars");
if(!$conn){
    die("Connection error" . mysqli_connect_error());
}

$sql="SELECT * FROM sell_car1 INNER JOIN sell_car2 ON sell_car1.CarID=sell_car2.last_id WHERE userID!='$userID'";
$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View full listing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
        <style>
             body{
            background-image: url("./image/frontpage.jpg");
            background-size: cover;
            }
            table{
                color: white;
                margin-top: 40px;
                font-size: 120%;
            }
            th,td{
               padding: 20PX;
            }
            .image{
                object-fit: cover;
                height:20vh;
                width:100%;
            }
            th{
                color: black;
                font-size: 150%;
            }
            .contact{
                color: black;
                background-color: white;
                padding: 3px 10px;   
            }
            </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-dark py-3">
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
            <a class="nav-link text-white" href="used_car_list.php" >My Used car list</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="sell_car1.php" >sell car</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="enquiries.php" >Enquiries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="edit_profile.php" >Edit Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="view_list.php" >View full listing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="login.php" >Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
        <table>
        <?php
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                       echo "";
                        ?>
                       <tr>
                           <th>Image</th>
                           <th>City</th>
                           <th>Year</th>
                           <th>Model</th>
                       </tr>
                        <tr>
                            <td><img class="image" src="photo/<?php echo $row['image'];?>"></td>
                            <td><?php echo $row['city'];?></td>
                            <td><?php echo $row['mgf_year'];?></td>
                            <td><?php echo $row['model'];?></td>
                        </tr>
                        <tr>
                        <td><a href="contact_seller.php?id=<?php echo $row['userID'];?>" class="contact text-decoration-none">CONTACT SELLER</a></td>
                        </tr>
                        <?php }
                      }else{
                          echo " " . mysqli_error($conn);
                      }?>

        </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>