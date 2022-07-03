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
            background-image: url("./image/main.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
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
  

        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <form action="sell_car2.2.php" method="POST" enctype="multipart/form-data">

            <div class="px-5 mt-5">
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