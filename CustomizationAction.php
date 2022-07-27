
<?php


include("config.php");
          
          
            $user_id=22222;
            $chocolate_name=$_POST["Chocolate_name"];
            $Price=$_POST["Price"];
            $Category ="Gift hampers";
           $Image=$_POST["Image"];
           $Description=$_POST["description"];

            $Quantity=$_POST['Quantity'];
            $Subtotal=0;

            $save=mysqli_query($con,"insert into cart(User_id,Category_name,ProductName,Product,price,Quantity,Subtotal,Image)values('$user_id','$Category','$chocolate_name','$Description','$Price','$Quantity','$Subtotal','$Image')");
        //   echo "insert into chocolate(User_id,Chocolate_name,Quantity,Subtotal,price,Category)values('$user_id','$chocolate_name','$Quantity','$Subtotal','$Price','$Category')";
          
            if($save)
            {
            
              echo "<script>alert('ADDED TO CART!!!'); </script>";

            }
            else
            {
            
                echo "<script>alert('FAILED!!!'); </script>";
            }


          
          ?>