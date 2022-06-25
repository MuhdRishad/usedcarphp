

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
  

        <?php
    
            session_start();
            echo "<p class='text-white ps-5 py-5 fs-4'><b>Welcome</b>" . " " .  $_SESSION['username'] ."</p>";
        ?>
        <h3 class="text-center text-white my-5 fs-1">Sell Or Buy Used Cars</h3>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>