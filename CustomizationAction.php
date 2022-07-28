
<?php


include("config.php");
          
          
            $user_id=22222;
            $chocolate_name=$_POST['Chocolate_name'];
            $Price=$_POST["Price"];
            

            $Category ="Gift hampers";
           $Image=$_POST["Image"];
           $Description="$chocolate_name"." * "."$Price";

            $Quantity=$_POST['Quantity'];
            $int_Quantity=(int)$Quantity;
            $product_id=$_POST['Product_id'];


            $Subtotal=$Price*$int_Quantity;

            $save=mysqli_query($con,"insert into Customized_cart(User_id,Category_name,ProductName,Product,price,Quantity,Subtotal,Image)values('$user_id','$Category','$chocolate_name','$Description','$Price','$Quantity','$Subtotal','$Image')");
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