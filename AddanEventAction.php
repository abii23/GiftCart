<?php
session_start();
include("config.php");

$user_id=$_SESSION["user_id"];;

$enterEvent =$_POST['name'];
$enterEmail=$_POST['email'];
$enterDate=$_POST['Date'];
$entertime=$_POST['time'];
$enterDescription=$_POST['Description'];


$save=mysqli_query($con,"INSERT INTO `remainder`(`User_id`, `EventName`, `Email`, `date`, `Time`, `Description`) VALUES ('$user_id','$enterEvent','$enterEmail','$enterDate','$entertime','$enterDescription')");

echo "INSERT INTO `remainder`(`User_id`, `EventName`, `Email`, `date`, `Time`, `Description`) VALUES ('$user_id','$enterEvent','$enterEmail','$enterDate','$entertime','$enterDescription')";

if($save)
{

    echo "<script>alert('Successfully Added!!');window.location='Remainder.php' </script>";


}
else
{
    echo "<script>alert('failed!!!')</script>";

}


?>