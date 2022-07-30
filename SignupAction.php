<?php
session_start();
include("config.php");


$sql=mysqli_query($con,"select ifnull(count(Id),0)+1 AS 'COUNT' from user_signup");
 $row=mysqli_fetch_array($sql);
 $appno=$row["COUNT"];
$currentyear=date("Y");
 $applicationnumber=$appno+$currentyear;;


$First_name=$_POST["txt_FirstName"];
$Last_name=$_POST["txt_LastName"];
$Email=$_POST["txt_Email"];
$Password=$_POST["txt_Password"];
$user_Status="Active";
$user_id=$applicationnumber;

$save=mysqli_query($con,"insert into user_signup(FirstName,LastName,Email,Password,User_Status,User_id)values('$First_name','$Last_name','$Email','$Password','$user_Status','$user_id')");

//echo "insert into user_signup(FirstName,LastName,Email,Password,User_Status,User_id)values('$First_name','$Last_name','$Email','$Password','$user_Status','$user_id')"

if($save)
{

    echo "<script>alert('SIGN UP COMPLETED!!!'); window.location='index.html'</script>";
}
else
{

    echo "<script>alert('FAILED!!!'); </script>";
}

echo $save;
?>