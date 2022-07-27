<?php
include("config.php");
if(isset($_POST['delete3']))
{
$EnterCat_id=$_POST["CategoryId"];

$save=mysqli_query($con,"DELETE FROM `productname` WHERE ProductId='$EnterCat_id'");
if($save)
{
echo "<script> alert('Successfully Deleted');window.location='dashboard.html'</script>";

}
else
{
echo "<script> alert('Failed');</script>";

}


}
?>