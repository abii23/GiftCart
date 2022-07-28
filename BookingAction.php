<?php

include("config.php");

$user_id=22222;
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



$save=mysqli_query($con,"INSERT INTO `bookingdetails`( `User_id`, `Product_id`, `Name`,`NameOnCard` ,`CreditCard`, `ExpMonth`, `CVV`, `ExpYear`, `FullName`, `Email`, `Address`, `City`, `Zip`, `State`) 
VALUES ('$user_id','$product_id','$name','$cardname','$cardnumber','$expmonth','$cvv','$expyear','$name','$email','$Address','$city','$zip','$state')"); //

// echo "insert into cart(User_id,Category_name,ProductName,Product,price,Quantity,Subtotal,Image)values('$user_id','$category_name','$product_name','$product','$Price','$Quantity','$Subtotal','$image')";

echo "INSERT INTO `bookingdetails`( `User_id`, `Product_id`, `Name`,`NameOnCard` ,`CreditCard`, `ExpMonth`, `CVV`, `ExpYear`, `FullName`, `Email`, `Address`, `City`, `Zip`, `State`) 
VALUES ('$user_id','$product_id','$name','$cardname','$cardnumber','$expmonth','$cvv','$expyear','$name','$email','$Address','$city','$zip','$state')";
if($save)
{

  echo "<script>alert('Successfully Booked!!!');window.location='index.html' </script>";

}
else
{

    // echo "<script>alert('FAILED!!!'); </script>";
}




?>