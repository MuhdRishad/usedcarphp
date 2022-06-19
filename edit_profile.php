<?php
session_start();
$userID=$_SESSION['user_id'];
$conn=mysqli_connect("localhost","root","","used_cars");
if(!$conn){
    die("Connection error" . mysqli_connect_error());
}

$sql ="SELECT * FROM registration WHERE id='$userID'";
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
    <title>Edit Profile</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <style>
            body{
            background-image: url("./image/frontpage.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            }
            #pass{
                border-radius: 5px;
                display: none;
            }
            #email{
                border-radius: 5px;
                display: none;
            }
            .label{
                color: white;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#passInfo").click(function(){
                    $("#pass").toggle();
                });
            });

            $(document).ready(function(){
                $("#emailInfo").click(function(){
                    $("#email").toggle();
                });
            });
        </script>
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
            <li><a href="home_page.php" class="text-white text-decoration-none">Home</a></li>
            <li class="ms-5"><a href="used_car_list.php" class="text-white text-decoration-none">My used car listing</a></li>
            <li class="ms-5"><a href="sell_car1.php" class="text-white text-decoration-none">Sell your car</a></li>
            <li class="ms-5"><a href="enquiries.php" class="text-white text-decoration-none">Enquiries</a></li>
            <li class="ms-5"><a href="edit_profile.php" class="text-white text-decoration-none">Edit Profile</a></li>
            <li class="ms-5"><a href="view_list.php" class="text-white text-decoration-none">View full listing</a></li>
            <li class="ms-5"><a href="login.php" class="text-white text-decoration-none">Logout</a></li>
        </ul>
       <div class="row">
           <div class="col-lg-3"></div>
           <div class="col-lg-6">
           <form action="updating_profile.php" method="POST">
        <br><br>

       <div class="px-5">
       <label class="text-danger fs-4" >Edit details now</label>
        <br><br>
       <label for="name" class="label">Name*:</label>
        <input type="text" name="name" id="name"  value="<?php echo $rows['name'];?>" class="my-2 form-control form-control-sm w-75">
        

        <label for="" class="label">Mobile Number*:</label>
        <input type="text" name="mobileNumber" id="mobileNo"  value="<?php echo $rows['mobileNo'];?>" class="my-2 form-control form-control-sm w-75">
        

        <label for="phoneNo" class="label">Phone No*:</label>
        <input type="text" name="phoneNumber" id="phoneNo"  value="<?php echo $rows['phoneNo'];?>" class="my-2 form-control form-control-sm w-75">
        

        <label for="state" class="label">State*:</label>
        <select id="state" name="state" class="my-2 form-control form-control-sm w-75">
            <option selected disabled value="">select state</option>
            <option value="Kerala">Kerala</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Goa">Goa</option>
            <option value="Andra Pradesh">Andra Pradesh</option>
            <option value="Telengana">Telengana</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Gujarath">Gujarath</option>
            <option value="Assam">Assam</option>
        </select>
        

        <label for="city" class="label">City*:</label>
        <select id="city" name="city" class="my-2 form-control form-control-sm w-75">
            <option value="Malappuram">Malappuram</option>
            <option value="Kozhikkodu">Kozhikkodu</option>
            <option value="Kannur">Kannur</option>
            <option value="Wayanad">Wayanad</option>
            <option value="Kasargode">Kasargode</option>
            <option value="Thrissur">Thrissur</option>
            <option value="Eranamkulam">Eranamkulam</option>
            <option value="Idukki">Idukki</option>
            <option value="Palakkadu">Palakkadu</option>
            <option value="Alappuzha">Alappuzha</option>
        </select>
        

        <label for="address" class="label">Street/Address:*</label>
        <textarea id="address" name="address" class="my-2 form-control form-control-sm w-75"><?php echo $rows['address'];?></textarea>
        

        <label for="pin" class="label">Postal Code:*</label>
        <input type="text" name="pin" id="pin"  value="<?php echo $rows['pinCode'];?>" class="my-2 form-control form-control-sm w-75">
        
       

        <h3 class="text-white my-3">Your log in Information</h3>

        <div class="text-white my-2">
        <input type="radio" name="loginInfo" value="password" id="passInfo">Password
        <br>

        <input type="password" name="password" id="pass" value="<?php echo $rows['password'];?>">
        </div>

        <div class="text-white my-2">
        <input type="radio" name="loginInfo" value="email" id="emailInfo">Email ID
        <br>

        <input type="password" name="email" id="email" value="<?php echo $rows['email'];?>">
        </div>

        <input type="submit" name="submit" value="Submit" id="update">
        </div>
    </form>
           </div>
           <div class="col-lg-3"></div>
        </div>
    </div>

       
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>