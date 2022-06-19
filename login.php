
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
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

    <div class="container-fluid">
    <div class="row">
        <div class="col">
        <h1 class="text-center text-danger my-5" style="font-size:60px;"><b>USED CAR</b></h1>
        </div>
    </div>

       <div class="row">
           <div class="col-auto">
           <form action="log_in.php" method="POST" onsubmit="return validate()" name="myForm">    
            
            <label class="text-white">Members login</label>
            <br><br>
            <label for="mail"  style="color:rgb(109, 230, 230);">Email ID</label>
            <input type="email" name="email" id="mail"><small id="email"></small>  
            <label for="password"  style="color:rgb(109, 230, 230);">Password</label>
            <input type="password" name="password" id="password"><small id="pass"></small>
            <input type="submit" name="btn1" value="Login">

            <a href="registration.php" class="text-white text-decoration-none">Register Now</a>
            </form>
           </div>
         </div>
        </div>
        <script src="login.js"></script>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>


