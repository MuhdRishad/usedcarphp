

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
        <div class="background img-fluid">
        <div class="row">
           <div class="col-lg-3 col-md-0 col-sm-0"></div>
           <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="ps-3">
            <h1 class="text-danger my-3 text-center"><b>USED CAR</b></h1>
            
           <form action="register.php" name="myForm" onsubmit="return validate()" method="POST" >

            <label class="label" >Register Now?</label>
            <br><br>

            <label for="name" class="label">Name*:</label>
            <input type="text" name="name" id="name" style="margin-left:86px;"><p id="one"  class="error-message"></p>
            <br><br>

            <label for="email" class="label"> Email*:</label>
            <input type="email" name="email" id="email" style="margin-left:91px;"><p id="two" class="error-message"></p>
            <br><br>

            <label for="cemail" class="label">Confirm Email*:</label>
            <input type="email" name="cemail" id="cemail" style="margin-left:31px;"><p id="three" class="error-message"></p>
            <br><br>

            <label for="pass" class="label">Password*:</label>
            <input type="password" name="password" id="pass" style="margin-left:65px;"><p id="four" class="error-message"></p>
            <br><br>

            <label for="vpass" class="label">Verify Password*:</label>
            <input type="password" name="vpassword" id="vpass" style="margin-left:23px;"><p id="five" class="error-message"></p>
            <br><br>

            <label for="mobileNo"  class="label">Mobile Number*:</label>
            <input type="text" name="mobileNumber" id="mobileNo" style="margin-left:22px;"><p id="six" class="error-message"></p>
            <br><br>

            <label for="phoneNo" class="label">Phone Number*:</label>
            <input type="text" name="phoneNumber" id="phoneNo" style="margin-left:27px;"><p id="seven" class="error-message"></p>
            <br><br>

            <label for="state" class="label">State*:</label>
            <input type="text" id="state" name="state" style="margin-left:100px;">
                <p id="eight" class="error-message"></p>
            <br><br>

            <label for="city" class="label">City*:</label>
            <input type="text" id="city" name="city" style="margin-left:108px;">
             <p id="nine" class="error-message"></p>
            <br><br>

            <label for="address" class="label">Street/Address:*</label>
            <textarea id="address" name="address" style="margin-left:32px;"></textarea><p id="ten" class="error-message"></p>
            <br><br>

            <label for="pin" class="label">Postal Code:*</label>
            <input type="text" name="pin" id="pin" style="margin-left:52px;"><p id="eleven" class="error-message"></p>
            <br><br>

            <div class="text-center">
            <input type="submit" name="submit" value="Submit" id="submit">
            </div>

            </form>
            </div>
            </div>
         
            <div class="col-lg-3 col-md-0 col-sm-0"></div>
            </div>
        </div>
      
            <script src="registration.js"></script>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>





