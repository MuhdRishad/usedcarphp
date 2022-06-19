

<?php
session_start();
$host_name="localhost";
$user_name="root";
$password="";
$db_name="used_cars";

$conn=mysqli_connect($host_name,$user_name,$password,$db_name);
if(!$conn){
    die("Error" . mysqli_connect_error());
}

    if(isset($_POST['btn1'])){
        if(empty($_POST['email']) || empty($_POST['password'])){
            header("location:login.php");  
        }else{
            $sql="SELECT * FROM registration WHERE email = '".$_POST['email']."' and password = '".$_POST['password']."'";
            $result = mysqli_query($conn,$sql);
            if($rows=mysqli_fetch_assoc($result)){
                $number=$rows['mobileNo'];
                $_SESSION['mobileNo']= $number;
                $uname=$rows['name'];
                $_SESSION['username']=$uname;
                $id=$rows['id'];
                $_SESSION['user_id']=$id;

                header("location:home_page.php");
            }else{
                header("location:login.php");
            }
        }
        
    }

?>
