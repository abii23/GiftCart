<?php
session_start();
include("config.php");

$user_id=$_SESSION["user_id"];;

$product_id=1;
$name=$_POST["firstname"];
$email=$_POST["email"];
$Address=$_POST['address'];

$city=$_POST["city"];
$state=$_POST["state"];

$zip=$_POST["zip"];

$cardname=$_POST["cardname"];
$cardnumber=$_POST["cardnumber"];
$expmonth =$_POST["expmonth"];
$expyear=$_POST["expyear"];

$cvv=$_POST["cvv"];
$date=date("Y/m/d,h:i:sa");



//---------------

$result=mysqli_query($con,"SELECT  * FROM `cart` WHERE User_id='$user_id'");
$sum=0;

while($row=mysqli_fetch_array($result))
{
$Category_name=$row['Category_name'];
$product_name=$row['ProductName'];
$ProductDetails=$row['Product'];
$Price=$row['price'];
$Quantity=$row['Quantity'];
$Subtotal=$row['Subtotal'];
$image=$row['Image'];
$Status="BOOKED";



//--------------


$save=mysqli_query($con,"INSERT INTO `bookeddetails`(`User_id`, `Category_name`, `ProductName`, `Product`, `price`, `Quantity`, `Subtotal`, `Image`, `Status`,`Date`) 
VALUES ('$user_id','$Category_name','$product_name','$ProductDetails','$Price','$Quantity','$Subtotal','$image','$Status','$date')"); 



}

$result=mysqli_query($con,"SELECT  * FROM `customized_cart` WHERE User_id='$user_id'");
$sum=0;

while($row=mysqli_fetch_array($result))
{
$Category_name=$row['Category_name'];
$product_name=$row['ProductName'];
$ProductDetails=$row['Product'];
$Price=$row['Price'];
$Quantity=$row['Quantity'];
$Subtotal=$row['Subtotal'];
$image=$row['Image'];
$Status="BOOKED";



//--------------


$save=mysqli_query($con,"INSERT INTO `bookeddetails`(`User_id`, `Category_name`, `ProductName`, `Product`, `price`, `Quantity`, `Subtotal`, `Image`, `Status`,`Date`) 
VALUES ('$user_id','$Category_name','$product_name','$ProductDetails','$Price','$Quantity','$Subtotal','$image','$Status','$date')"); 


}
// $save=mysqli_query($con," "); 


$save=mysqli_query($con,"INSERT INTO `bookingdetails`( `User_id`, `Product_id`, `Name`,`NameOnCard` ,`CreditCard`, `ExpMonth`, `CVV`, `ExpYear`, `FullName`, `Email`, `Address`, `City`, `Zip`, `State`) 
VALUES ('$user_id','$product_id','$name','$cardname','$cardnumber','$expmonth','$cvv','$expyear','$name','$email','$Address','$city','$zip','$state')"); //



if($save)
{

  echo "<script>alert('Successfully Booked!!!');window.location='user.html' </script>";

  $save=mysqli_query($con,"DELETE FROM `cart` WHERE User_id='$user_id'");
  $save=mysqli_query($con,"DELETE FROM `customized_cart` WHERE User_id='$user_id'");


}
else
{

    echo "<script>alert('FAILED!!!'); </script>";
}




?>