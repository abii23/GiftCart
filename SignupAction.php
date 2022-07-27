<?php
session_start();
include("config.php");
$First_name=$_POST["txt_FirstName"];
$Last_name=$_POST["txt_LastName"];
$Email=$_POST["txt_Email"];
$Password=$_POST["txt_Password"];
$user_Status="Active";
$user_id=22222;

$save=mysqli_query($con,"insert into user_signup(FirstName,LastName,Email,Password,User_Status,User_id)values('$First_name','$Last_name','$Email','$Password','$user_Status','$user_id')");

//echo "insert into user_signup(FirstName,LastName,Email,Password,User_Status,User_id)values('$First_name','$Last_name','$Email','$Password','$user_Status','$user_id')"

if($save)
{

    echo "<script>alert('SIGN UP COMPLETED!!!'); window.location='index2.html'</script>";
}
else
{

    echo "<script>alert('FAILED!!!'); </script>";
}

echo $save;
?>