
<?php
    session_start();
    $userID=$_SESSION['user_id'];
    $conn=mysqli_connect("localhost","root","","used_cars");
    if(!$conn){
        die("Connection error" . mysqli_connect_error());
    }
    if(isset($_POST['btn3'])){
        $place =$_POST['place'];
        $postalCode =$_POST['postcode'];
        $mgf_year =$_POST['year'];
        $company =$_POST['company'];
        $model =$_POST['model'];
        $kmsDriven =$_POST['kms'];
        $owners =$_POST['owners'];
        $prize =$_POST['prize'];
        $userName =$_POST['uname'];
        $number =$_POST['number'];
        $email =$_POST['mail'];
        $fuelType=$_POST['fueltype'];
        $colour=$_POST['colour'];
        $registrationNo=$_POST['reg_no'];
        $insuranceValid=$_POST['insurence'];
        $note=$_POST['note'];
        $last_id=$_SESSION['lastID'];
    }

    $query = "UPDATE sell_car1 INNER JOIN sell_car2 ON sell_car1.CarID=sell_car2.last_id SET city='$place',pinCode='$postalCode',mgf_year='$mgf_year',company='$company',model='$model',kms_driven='$kmsDriven',owners='$owners',prize='$prize',name='$userName',mobileNo='$number',emailID='$email',fuelType='$fuelType',color='$colour',registrationNo='$registrationNo',insureDate='$insuranceValid',note='$note' WHERE last_id='$last_id'";
    if(mysqli_query($conn,$query)){
       header("location:used_car_list.php");
    }else{
        echo "Error" . mysqli_error($conn);
    }

?>