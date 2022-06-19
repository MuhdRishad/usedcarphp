<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell your car </title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>
        body{
            background-image: url("./image/frontpage.jpg");
            background-size: cover;
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
            <form action="sell_car1.2.php" method="POST">

        <div class="px-5">
            <h4 class="mb-3 text-white">Just fill your information and get started</h4>
            <label for="city" class="text-white" >City*</label>
            <input type="text" name="place" id="city" class="my-2 form-control form-control-sm w-75">

            <label for="pin" class="text-white" >Pincode*</label>
            <input type="text" name="postcode" id="pin" class="my-2 form-control form-control-sm w-75">

            <h4 class="text-white mt-5">Car Information</h4>
            <label for="year" class="text-white" >MFG Year*</label>
            <input type="text" name="year" id="year" class="my-2 form-control form-control-sm w-75">

            <label for="company" class="text-white" >Make*</label>
            <input type="text" name="company" id="company" class="my-2 form-control form-control-sm w-75">
           

            <label for="model" class="text-white" >Model*</label>
            <input type="text" name="model" id="model" class="my-2 form-control form-control-sm w-75">

            <label for="kms" class="text-white" >KMs Driven*</label>
            <input type="text" name="kms" id="kms" class="my-2 form-control form-control-sm w-75">

            <label for="owners" class="text-white" >No.of Owners*</label>
            <input type="text" name="owners" id="owners" class="my-2 form-control form-control-sm w-75">

            <label for="prize" class="text-white" >Expected Prize*</label>
            <input type="text" name="prize" id="prize" class="my-2 form-control form-control-sm w-75">

            <h4 class="text-white mt-5">Contact Information</h4>
            <label for="name" class="text-white" >Name*</label>
            <input type="text" name="uname" id="name" class="my-2 form-control form-control-sm w-75">

            <label for="number" class="text-white" >Mobile Number*</label>
            <input type="text" name="number" id="number" class="my-2 form-control form-control-sm w-75">

            <label for="email" class="text-white" >Email ID*</label>
            <input type="text" name="mail" id="email" class="my-2 form-control form-control-sm w-75">

            <div class="my-3">
            <input type="submit" name="btn1" value="POST LISTING" class="submit">
            </div>
        </div>
     </form>
    </div>
        <div class="col-lg-3"></div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>