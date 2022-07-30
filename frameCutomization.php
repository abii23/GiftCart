<?php

session_start();
$userid=$_SESSION["user_id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
  </head>
<body>
  

  
   <div class="container">    
      <div class="navbar">
         <div class="logo">
            <img src="img/logo.jpg" width="50px">
         </div>
         <nav>
           <ul id="MenuItems">
             <li><a href="index.html">Home</a></li>
          
           </ul>
         </nav>
         <a href="Cart.php">
         <img src="https://toppng.com/uploads/preview/luxury-goods-tide-icon-comments-bag-cart-icon-11553457648rokwlpgpvq.png" width="30px">
        </a>
         <img src="/Day 1/image/menu.png" class="menu-icon" onclick="menutoggle()">
      </div>
       
   </div>
   
   
   <div class="small-containe">
       <div class="row">
       
</form>
    </select>
</div>
</div>
<BR></BR>
   <div class="small-container">
      <div class="row">
   <?php

          include("config.php");

        
								?>
           <?php
        



          

						$slno=1;
							$result=mysqli_query($con,"select * from productname where Category_id='9'");
							while($row=mysqli_fetch_array($result))
							{
								$product_id=$row["ProductId"];
								?>

    
        <div class="col4">
            <form action="AddToCartAction.php" method="POST" >

                <img  src="./AAdmin/image/<?php echo $row['Image']; ?>">
                <input type="hidden" name="Image" value="<?php echo $row['Image']; ?>">
                <input type="hidden" name="ProductName" value="<?php echo $row["ProductName"];?>"/>
                <input type="hidden" name="ProductsDetails" value="<?php echo $row["ProductsDetails"]?>"/>
                <p><?php echo $row["ProductName"];?></p>
                <small><?php echo $row["ProductsDetails"]?></small>
           
               
                <p>Price: Rs.<?php echo $row["Price"];?></p>
                <input type="hidden" name="Price" value= "<?php echo $row["Price"];?>"/>
              
               

                <input  type="hidden" name="CategoryId" value="<?php echo $row["ProductId"];?>">
               

                <!-- <td><a href='Editcategory.php?Cat_Id=".$row ['Cat_id'].">Edit</a> -->
         

                            </form>

<?php

// $_SESSION["Product_id"] = $row['ProductId'];
?>
    <!-- <a href='Customization.php?Product_id=<?php echo $row['ProductId']?>' class="btn">

      Check Frame &#8594;
    </a>   -->
    <div class="form-group">
        <div class="input-group">
            <br>
            <br>
            <form action="FrameAction.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="Product_id" value="<?php echo $product_id?>">
      <label >Select file</label>

        <input type="file" class="form-control" name="uploadFile" id="fileToUpload" style="width:100%;">			</div>
        </div>


    <button type="Submit" value="Check Frame"  class='btn'>Check Frame&#8594; </button>
</form>

 



        </div>
        <!-- <div class="col4">
          <img src="img/IMG_2532.jpg">
          <h4>GIFT BOX</h4>
          <a href="product1.php"class="btn">Shop Now &#8594;</a>
        </div> -->
        <!-- <div class="col4">
          <img src="img/IMG_4396.jpg">
          <h4>FRAME</h4>
          <a href="frame.html"class="btn">Shop Now &#8594;</a>
        </div> -->
        <?php
                                    // echo "</tr>";
}   
                                
                            ?>
            </table>
      </div>
    </div>


    <!-----js for toggle menu-->
    <script>
      var MenuItems = document.getElementById("MenuItems");
      MenuItems.style.maxHeight = "0px";
      function menutoggle(){
        if(MenuItems.style.maxHeight == "0px"){
          MenuItems.style.maxHeight = "200px";
        }
        else
        {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>

</body>
</html>

<?php
          include("config.php");
          if(isset($_POST['btnSubmit1']))
          {
            $user_id=$userid;
            $category_name="Gift Hampers";
            $Price=3000;
            $product ="Includes 2 Ferrero, 2 Toblerone, 10 Galaxy, 10 Bounty";

            $Quantity=1;
            $Subtotal=0;

            $image ="img/IMG_1277.jpg";    // CHANGE IMAGE URL IN EVERY PRODUCT

            $save=mysqli_query($con,"insert into cart(User_id,Category_name,Product,price,Quantity,Subtotal,Image)values('$user_id','$category_name','$product','$Price','$Quantity','$Subtotal','$image')"); //
            if($save)
            {
            
              echo "<script>alert('ADDED TO CART!!!'); </script>";

            }
            else
            {
            
                echo "<script>alert('FAILED!!!'); </script>";
            }


          
          }
        


          

        
          ?>