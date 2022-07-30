<?php
session_start();
include("config.php");

$user_id=$_SESSION["user_id"];;
$category_name=$_POST["CategoryId"];
$product_name=$_POST["ProductName"];
$Price=$_POST["Price"];
$product =$_POST["ProductsDetails"];

$Quantity=1;
$Subtotal=$Price*$Quantity;

$image ="img/IMG_1277.jpg";    // CHANGE IMAGE URL IN EVERY PRODUCT

$image=$_POST["Image"];

$save=mysqli_query($con,"insert into cart(User_id,Category_name,ProductName,Product,price,Quantity,Subtotal,Image)values('$user_id','$category_name','$product_name','$product','$Price','$Quantity','$Subtotal','$image')"); //

echo "insert into cart(User_id,Category_name,ProductName,Product,price,Quantity,Subtotal,Image)values('$user_id','$category_name','$product_name','$product','$Price','$Quantity','$Subtotal','$image')";
if($save)
{

  echo "<script>alert('ADDED TO CART!!!');window.location='Cart.php' </script>";

}
else
{

    echo "<script>alert('FAILED!!!'); </script>";
}


   ?>