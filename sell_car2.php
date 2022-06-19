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
            <form action="sell_car2.2.php" method="POST" enctype="multipart/form-data">

            <div class="px-5">
            <label class="text-white">Upload Image</label>
            <input type="file" name="image" id="myfile">

            <h4 class="text-white my-3">Listing Details</h4>

            <label for="fuel" class="text-white">Feul Type*</label>
            <input type="text" id="fuel" name="fueltype" class="my-2 form-control form-control-sm w-75">
             

            <label for="colour" class="text-white">Colour*</label>
            <input type="text" id="colour" name="colour"  class="my-2 form-control form-control-sm w-75">
           

            <label for="regNo" class="text-white">Registration No*</label>
            <input type="text" name="reg_no" id="regNo" class="my-2 form-control form-control-sm w-75" >

            <label for="insurence" class="text-white">Insurance Valid till*</label>
            <input type="text" name="insurence" id="insurence" class="my-2 form-control form-control-sm w-75">

            <label for="note" class="text-white">Tell the buyer why you should by your car*</label>
            <textarea name="note" id="note" class="my-2 form-control form-control-sm w-75"></textarea>

            <div class="my-3">
            <input type="submit" name="btn2" value="POST LISTING" id="SUBMIT">
            </div>
            </div>
        </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
   

    </div>
</body>
</html>