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
         <img src="img/menu.png" class="menu-icon" onclick="menutoggle()">
      </div>
       
   </div>
  
    <div class="small-container">
      <div class="row row-2">
        <h2>Gift Hampers</h2>
        
      </div>
      <div class="row">
        <div class="col4">
          <form action="" method="POST">

         
          <img src="img/IMG_1277.jpg">
          <small>Includes 2 Ferrero, 2 Toblerone, 10 Galaxy, 10 Bounty</small>
          <p>Rs.3000</p>
          <button  type ="submit" name="btnSubmit1" class="btn">Add to cart</button>
          <a type="submit" href="Customization.php" class="btn">Customise Now &#8594;</a>

          </form>
         
          
        
        </div>
        <div class="col4">
        <form action="" method="POST">

          <img src="img/IMG_4391.jpg">
          <small>Includes 2 toblerone, 2 Dairy Milk Silk, 6 Galaxy, 3 Snickers, 3 Mars with scented roses</small>
          <p>Rs.2500</p>
          <button type="submit" name="btnSubmit2" href=""class="btn">Add to cart</button>
          <a type="submit" href="Customization.php" class="btn">Customise Chocolates</a>



          </form>

          
        </div>
        <div class="col4">
        <form action="" method="POST">

          <img src="img/IMG_4403.JPG">
          <small>Include 20 Dairy Milk, 20 Galaxy, 16 Snickers, 15 Ferrero decorated with scented roses</small>
          <p>Rs.4000</p>
          <button type="submit" name="btnSubmit3" href=""class="btn" >Add to cart</button>
      

          <a type="submit" href="Customization.php" class="btn">Customise Chocolates</a>
        
          </form>
        </div>

        <div class="col4">
        <form action="" method="POST">

          <img src="img/IMG_6081.jpg">
          <small>Includes 7 Dairy Milk, 2 Toblerone, 2 pack Ferrero, 3 Snickers</small>
          <p>Rs.1500</p>
          <button type="submit" name="btnSubmit2" href=""class="btn">Add to cart</button>
          <a type="submit" href="Customization.php" class="btn">Customise Now &#8594;</a>



          </form>

          
        </div>

        <div class="col4">
        <form action="" method="POST">

          <img src="img/IMG_5594.jpg">
          <small>Includes Dairy Milk Silk, Galaxy, Bounty, Ferrero with a Card</small>
          <p>Rs.1300</p>
          <button type="submit" name="btnSubmit2" href=""class="btn">Add to cart</button>
          <a type="submit" href="Customization.php" class="btn">Customise Now &#8594;</a>



          </form>
        </div>
        <div class="col4">
        <form action="" method="POST">

          <img src="img/IMG_8060.jpg">
          <small>Love shaped hamper filled with small sized Galaxies and Toblerone<br>Square shaped hamper filled with Ferrero, Raffello and Patchi</small>
          <p>Rs.4500</p>
          <button type="submit" name="btnSubmit2" href=""class="btn">Add to cart</button>
          <a type="submit" href="Customization.php" class="btn">Customise Now &#8594;</a>



          </form>

          
        </div>
        <div class="col4">
        <form action="" method="POST">

          <img src="img/06307be3-a97b-4904-8391-2eda6b74aea4.jpg">
          <small>Love shaped hamper includes 20 KitKats, 9 Ferrero with red and white scented roses </small>
          <p>Rs.1800</p>
          <button type="submit" name="btnSubmit2" href=""class="btn">Add to cart</button>
          <a type="submit" href="Customization.php" class="btn">Customise Now &#8594;</a>



          </form>

          
        </div>
        <div class="col4">
        <form action="" method="POST">

          <img src="img/add8d8f2-bacc-4d38-a576-a9fe1169f94b.jpg">
          <small>Includes 16 Kitkats decorated with scented roses</small>
          <p>Rs.1400</p>
          <button type="submit" name="btnSubmit2" href=""class="btn">Add to cart</button>
          <a type="submit" href="Customization.php" class="btn">Customise Now &#8594;</a>



          </form>

          
        </div>




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
            $user_id=22222;
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
          if(isset($_POST['btnSubmit2']))
          {

            $user_id=22222;
            $category_name="Gift Hampers";
            $Price=2500;
            $product ="Includes 2 toblerone, 2 Dairy Milk Silk, 6 Galaxy, 3 Snickers, 3 Mars with scented roses";
            $Quantity=1;
            $Subtotal=0;
            $image ="img/IMG_4391.jpg"; 

            $save=mysqli_query($con,"insert into cart(User_id,Category_name,Product,price,Quantity,Subtotal,Image)values('$user_id','$category_name','$product','$Price','$Quantity','$Subtotal','$image')");
            if($save)
            {
            
              echo "<script>alert('ADDED TO CART!!!'); </script>";

            }
            else
            {
            
                echo "<script>alert('FAILED!!!'); </script>";
            }
          }
         if(isset($_POST['btnSubmit3']))
          {
            
            $user_id=22222;
            $category_name="Gift Hampers";
            $Price=4000;
            $product ="Include 20 Dairy Milk, 20 Galaxy, 16 Snickers, 15 Ferrero decorated with scented roses";
            $Quantity=1;
            $Subtotal=0;
            $image ="img/IMG_4403.jpg"; 

            $save=mysqli_query($con,"insert into cart(User_id,Category_name,Product,price,Quantity,Subtotal,Image)values('$user_id','$category_name','$product','$Price','$Quantity','$Subtotal','$image')");
            if($save)
            {
            
              echo "<script>alert('ADDED TO CART!!!'); </script>";

            }
            else
            {
            
                echo "<script>alert('FAILED!!!'); </script>";
            }


          }
          if(isset($_POST['btnSubmit3']))
          {
            
            $user_id=22222;
            $category_name="Gift Hampers";
            $Price=1500;
            $product ="Includes 7 Dairy Milk, 2 Toblerone, 2 pack Ferrero, 3 Snickers";
            $Quantity=1;
            $Subtotal=0;
            $image ="img/IMG_6081.jpg"; 

            $save=mysqli_query($con,"insert into cart(User_id,Category_name,Product,price,Quantity,Subtotal,Image)values('$user_id','$category_name','$product','$Price','$Quantity','$Subtotal','$image')");
            if($save)
            {
            
              echo "<script>alert('ADDED TO CART!!!'); </script>";

            }
            else
            {
            
                echo "<script>alert('FAILED!!!'); </script>";
            }


          }

          if(isset($_POST['btnSubmit3']))
          {
            
            $user_id=22222;
            $category_name="Gift Hampers";
            $Price=1300;
            $product ="Includes Dairy Milk Silk, Galaxy, Bounty, Ferrero with a Card";
            $Quantity=1;
            $Subtotal=0;
            $image ="img/IMG_5594.jpg"; 

            $save=mysqli_query($con,"insert into cart(User_id,Category_name,Product,price,Quantity,Subtotal,Image)values('$user_id','$category_name','$product','$Price','$Quantity','$Subtotal','$image')");
            if($save)
            {
            
              echo "<script>alert('ADDED TO CART!!!'); </script>";

            }
            else
            {
            
                echo "<script>alert('FAILED!!!'); </script>";
            }


          }

          if(isset($_POST['btnSubmit3']))
          {
            
            $user_id=22222;
            $category_name="Gift Hampers";
            $Price=4500;
            $product ="Love shaped hamper filled with small size galaxy and toblerone. Square shaped hamper filled with ferrero ,Raffello and Patchi";
            $Quantity=1;
            $Subtotal=0;
            $image ="img/IMG_8060.jpg"; 

            $save=mysqli_query($con,"insert into cart(User_id,Category_name,Product,price,Quantity,Subtotal,Image)values('$user_id','$category_name','$product','$Price','$Quantity','$Subtotal','$image')");
            if($save)
            {
            
              echo "<script>alert('ADDED TO CART!!!'); </script>";

            }
            else
            {
            
                echo "<script>alert('FAILED!!!'); </script>";
            }


          }

          if(isset($_POST['btnSubmit3']))
          {
            
            $user_id=22222;
            $category_name="Gift Hampers";
            $Price=1800;
            $product ="Love shaped hamper includes 20 kitkat,9 Ferrero with Red and white Scented roses";
            $Quantity=1;
            $Subtotal=0;
            $image ="img/06307be3-a97b-4904-8391-2eda6b74aea4.jpg"; 

            $save=mysqli_query($con,"insert into cart(User_id,Category_name,Product,price,Quantity,Subtotal,Image)values('$user_id','$category_name','$product','$Price','$Quantity','$Subtotal','$image')");
            if($save)
            {
            
              echo "<script>alert('ADDED TO CART!!!'); </script>";

            }
            else
            {
            
                echo "<script>alert('FAILED!!!'); </script>";
            }


          }

          if(isset($_POST['btnSubmit3']))
          {
            
            $user_id=22222;
            $category_name="Gift Hampers";
            $Price=1400;
            $product ="Includes 16 kitkat decorated with scented roses.";
            $Quantity=1;
            $Subtotal=0;
            $image ="img/add8d8f2-bacc-4d38-a576-a9fe1169f94b.jpg"; 

            $save=mysqli_query($con,"insert into cart(User_id,Category_name,Product,price,Quantity,Subtotal,Image)values('$user_id','$category_name','$product','$Price','$Quantity','$Subtotal','$image')");
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