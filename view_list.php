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