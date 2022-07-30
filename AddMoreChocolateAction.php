
<?php

session_start();
$userid=$_SESSION["user_id"];


include("config.php");
$product_id=$_POST['Product_id'];  
echo $product_id;  

//---------
$result=mysqli_query($con,"select * from customized_cart where id=$product_id");
echo "select * from customized_cart where id='$product_id'";
$row=mysqli_fetch_array($result);

$DbProduct=$row['Product'];
$DbPrice=$row['Price'];
$DbQuantity=$row['Quantity'];
$DbSubtotal=$row['Subtotal'];
//-----


          
            $user_id=$userid;
            $chocolate_name=$_POST['Chocolate_name'];
            $Price=$_POST["Price"];
            

            $Category ="Gift hampers";
           $Image=$_POST["Image"];
           $Description="$chocolate_name"." * "."$Price";

            $Quantity=$_POST['Quantity'];
            $int_Quantity=(int)$Quantity;
            $product_id=$_POST['Product_id'];


            $Subtotal=$Price*$int_Quantity;

//-----------------------
            $FinalProduct="$Description".","."$DbProduct";
            $FinalPrice=$DbPrice+$Price;
            $FinalQuantity=$DbQuantity+$int_Quantity;
            $FinalSubtotal=$DbSubtotal+$Subtotal;





            $save=mysqli_query($con,"UPDATE `customized_cart` SET `Product`='$FinalProduct',`Price`='$FinalPrice',`Quantity`='$FinalQuantity',`Subtotal`='$FinalSubtotal' WHERE id=$product_id");
            if($save)
            {
                
                echo "<script>alert('ADDED TO CART!!!');window.location='Cart.php?product_id=' </script>";
                
            }
            else
            {
                // echo "UPDATE `customized_cart` SET `Product`='$FinalProduct',`Price`='$FinalPrice',`Quantity`='$FinalQuantity',`Subtotal`='$FinalSubtotal' WHERE id=$product_id";
            
                echo "<script>alert('FAILED!!!'); </script>";
            }


          
          ?>