<?php 
session_start();
include ("config.php"); 
// if (isset($_POST["submit"]))
// {
$username=$_POST["txt_username"];
$password=$_POST["txt_password"];
$result=mysqli_query($con, "SELECT * from admin_details WHERE Email='$username' AND Password ='$password'");
//echo "SELECT * from tbl_candidatebasicdetails WHERE username='$username' AND password='$password'";
$row=mysqli_fetch_array($result);
if($row>0) 
{ 
    // $_SESSION["appno"]=$row["applicationnumber"];
    // echo $_SESSION["appno"];
    echo '<script>alert("Login Successfull")</script>';

    header("location:./AAdmin/dashboard.html");
}
else
{
     echo '<script>alert("Invalid Username or Password")</script>';
}
// }
?> 