
<?php


include("config.php");
          session_start();
          
            $user_id=$_SESSION["user_id"];;
            $chocolate_name=$_POST['Chocolate_name'];
            $Price=$_POST["Price"];
            
            $product_id=$_POST['Product_id'];

            $result1=mysqli_query($con,"select * from productname where ProductId='$product_id'");
            $row2=mysqli_fetch_array($result1);
            $Product_name=$row2['ProductName'];
            $Image=$row2["Image"];
           

            $Category =$row2['Category_id'];
          //  $Image=$_POST["Image"];
          
          $Quantity=$_POST['Quantity'];
          $int_Quantity=(int)$Quantity;
          $Description="$chocolate_name"." * "."$int_Quantity"." = "."$Price";


            $Subtotal=$Price*$int_Quantity;

            $save=mysqli_query($con,"insert into Customized_cart(User_id,Category_name,ProductName,Product,price,Quantity,Subtotal,Image)values('$user_id','$Category','$Product_name','$Description','$Price','$Quantity','$Subtotal','$Image')");
          // echo "insert into cart(User_id,Category_name,ProductName,Product,price,Quantity,Subtotal,Image)values('$user_id','$Category','$chocolate_name','$Description','$Price','$Quantity','$Subtotal','$Image')";
            if($save)
            {
            
              echo "<script>alert('ADDED TO CART!!!');window.location='Cart.php?product_id=' </script>";

            }
            else
            {
            
                echo "<script>alert('FAILED!!!'); </script>";
            }


          
          ?>