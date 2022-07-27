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
            <img src="/Day 1/image/logo.jpg" width="50px">
         </div>
         <nav>
           <ul id="MenuItems">
             <li><a href="index2.html">Home</a></li>
            
    
           </ul>
         </nav>
         <a href="Cart.php">

           <img src="https://toppng.com/uploads/preview/luxury-goods-tide-icon-comments-bag-cart-icon-11553457648rokwlpgpvq.png" width="30px">
          </a>
         <img src="/Day 1/image/menu.png" class="menu-icon" onclick="menutoggle()">
      </div>
       
   </div>
  
    <div class="small-container">
      <div class="row row-2">
        <h2>Frame</Frame></h2>
        <select>
            <option>Default Sorting</option>
            <option>Sort by Price</option>
            <option> Sort by rating</option>
            <option>Sort by sale</option>
        </select>
      </div>

      <form action="" method="post">

        <div class="row">
          <div class="col4">
            <img src="/Day 1/image/IMG_4997.jpg">
            <small>Includes 15 diarymilk</small>
            <p>Rs.500</p>
            <button type="submit" name="btnsubmit1" href=""class="btn">Add to cart</button>
            <a href=""class="btn">Customise Chocolates</a>
          </form>
         
        </div>
        <div class="col4">
        <form action="" method="post">
          
          
          <img src="/Day 1/image/IMG_5127.jpg">
          <small>Includes 20 toblerone</small>
          <p>Rs.1500</p>
          <button type="submit" name="btnsubmit2" href=""class="btn">Add to cart</button>
          <a href=""class="btn">Customise Chocolates</a>
        </form>
        </div>
        <div class="col4">
        <form action="" method="post">

          
          <img src="/Day 1/image/IMG_4584.JPG">
          <small>Include something</small>
          <p>Rs.100</p>
          <button type="submit" name="btnsubmit3" href=""class="btn">Add to cart</button>
          <a href=""class="btn">Customise Chocolates</a>
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
          if(isset($_POST['btnsubmit1']))
          {
            $user_id=22222;
            $category_name="Frame";
            $Price=500;
            $product ="Includes 15 diarymilk";

            $Quantity=1;
            $Subtotal=0;

            $save=mysqli_query($con,"insert into cart(User_id,Category_name,Product,price,Quantity,Subtotal)values('$user_id','$category_name','$product','$Price','$Quantity','$Subtotal')");
            if($save)
            {
            
              echo "<script>alert('ADDED TO CART!!!'); </script>";

            }
            else
            {
            
                echo "<script>alert('FAILED!!!'); </script>";
            }



          
          }
          if(isset($_POST['btnsubmit2']))
          {

            $user_id=22222;
            $category_name="Frame";
            $Price=1500;
            $product ="Includes 20 toblerone";

            $Quantity=1;
            $Subtotal=0;

            $save=mysqli_query($con,"insert into cart(User_id,Category_name,Product,price,Quantity,Subtotal)values('$user_id','$category_name','$product','$Price','$Quantity','$Subtotal')");
            if($save)
            {
            
              echo "<script>alert('ADDED TO CART!!!'); </script>";

            }
            else
            {
            
                echo "<script>alert('FAILED!!!'); </script>";
            }

          }
         if(isset($_POST['btnsubmit3']))
          {
            
            $user_id=22222;
            $category_name="Frame";
            $Price=100;
            $product ="Include something";

            $Quantity=1;
            $Subtotal=0;

            $save=mysqli_query($con,"insert into cart(User_id,Category_name,Product,price,Quantity,Subtotal)values('$user_id','$category_name','$product','$Price','$Quantity','$Subtotal')");
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