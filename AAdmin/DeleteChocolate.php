<?php
include("config.php");

$EnterCat_id=$_GET["chocolateid"];

$save=mysqli_query($con,"DELETE FROM `chocolate` WHERE id='$EnterCat_id'");
if($save)
{
echo "<script> alert('Successfully Deleted');window.location='dashboard.html'</script>";

}
else
{
echo "<script> alert('Failed');</script>";

}



?>