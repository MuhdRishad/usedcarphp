<?php
session_start();
$userID=$_SESSION['user_id'];
$row_id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","used_cars");
if(!$conn){
    die("Connection error" . mysqli_connect_error());
}

$sql ="SELECT * FROM sell_car1 INNER JOIN sell_car2 ON sell_car1.CarID=sell_car2.last_id WHERE last_id='$row_id'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
$rows=mysqli_fetch_assoc($result);
    $lastId=$rows['last_id'];
    $_SESSION['lastID']=$lastId;

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
    <title>Update car details</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <style>
            body{
            background-image: url("./image/frontpage.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            }
        </style>
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
            <form action="updating_car_details.php" method="POST">
        

        <div class="px-5">
        <h4 class="text-white mt-3">Just fill your information and get started</h4>
            
        <label for="city" class="text-white">City*</label>
        <input type="text" name="place" id="city" value="<?php echo $rows['city'];?>" class="my-2 form-control form-control-sm w-75">
        

        <label for="pin" class="text-white">Pincode*</label>
        <input type="text" name="postcode" id="pin" value="<?php echo $rows['pinCode'];?>" class="my-2 form-control form-control-sm w-75">
        

        <h4 class="text-white mt-4">Car Information</h4>
        
        <label for="year" class="text-white">MFG Year*</label>
        <input type="text" name="year" id="year" value="<?php echo $rows['mgf_year'];?>" class="my-2 form-control form-control-sm w-75">
        

        <label for="company" class="text-white">Make*</label>
        <input type="text" name="company" id="company" value="<?php echo $rows['company'];?>" class="my-2 form-control form-control-sm w-75">
          

        <label for="model" class="text-white">Model*</label>
        <input type="text" name="model" id="model" value="<?php echo $rows['model'];?>" class="my-2 form-control form-control-sm w-75">
        

        <label for="kms" class="text-white">KMs Driven*</label>
        <input type="text" name="kms" id="kms" value="<?php echo $rows['kms_driven'];?>" class="my-2 form-control form-control-sm w-75">
        

        <label for="owners" class="text-white">No.of Owners*</label>
        <input type="text" name="owners" id="owners" value="<?php echo $rows['owners'];?>" class="my-2 form-control form-control-sm w-75">
        

        <label for="prize" class="text-white">Expected Prize*</label>
        <input type="text" name="prize" id="prize" value="<?php echo $rows['prize'];?>" class="my-2 form-control form-control-sm w-75">
        

        <h4 class="text-white mt-4">Contact Information</h4>

        <label for="name" class="text-white">Name*</label>
        <input type="text" name="uname" id="name" value="<?php echo $rows['name'];?>" class="my-2 form-control form-control-sm w-75">
        

        <label for="number" class="text-white">Mobile Number*</label>
        <input type="text" name="number" id="number" value="<?php echo $rows['mobileNo'];?>" class="my-2 form-control form-control-sm w-75">
        

        <label for="email" class="text-white">Email ID*</label>
        <input type="text" name="mail" id="email" value="<?php echo $rows['emailID'];?>" class="my-2 form-control form-control-sm w-75">
        

        <h4 class="text-white mt-4">Listing Details</h4>
        

        <label for="fuel" class="text-white">Feul Type</label>
        <input type="text" id="fuel" name="fueltype" value="<?php echo $rows['fuelType'];?>" class="my-2 form-control form-control-sm w-75">
        

        <label for="colour" class="text-white">Colour</label>
        <input type="text" id="colour" name="colour" value="<?php echo $rows['color'];?>"  class="my-2 form-control form-control-sm w-75">
          
        

        <label for="regNo" class="text-white">Registration No</label>
        <input type="text" name="reg_no" id="regNo"  value="<?php echo $rows['registrationNo'];?>" class="my-2 form-control form-control-sm w-75">
        

        <label for="insurence" class="text-white">Insurance Valid till</label>
        <input type="text" name="insurence" id="insurence"  value="<?php echo $rows['insureDate'];?>" class="my-2 form-control form-control-sm w-75">
        

        <label for="note" class="text-white">Tell the buyer why you should by your car</label>
        <textarea name="note" id="note" class="my-2 form-control form-control-sm w-75"><?php echo $rows['note'];?></textarea>
        

       <div class="my-3">
       <input type="submit" name="btn3" value="POST LISTING" id="SUBMIT">
       </div>
        </div>
        </form>
            </div>
            <div class="col-lg-3"></div>
        </div>

        </div>
</body>
</html>

