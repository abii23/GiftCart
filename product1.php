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
         <img src="img/menu.png" class="menu-icon" onclick="menutoggle()">
      </div>
       
   </div>
  
    <div class="small-container">
      <div class="row row-2">
        <h2>Gift Box</h2>
        
      </div>
      <div class="row">
        <div class="col4">
          <form action="" method="post">

            <img src="img/IMG_9232.jpg">
            <small>Includes 3 diarymilk silk,2 kitkat,2 pack of ferrero</small>
            <p>Rs.900</p>
            <button type="submit" name="btnsubmit1" href=""class="btn">Add to cart</button>
            <a type="submit" href="Customization1.php" class="btn">Customise Chocolates</a>
          </form>
         
        </div>
        <div class="col4">
          <form action="" method="post">
            <img src="img/IMG_7131.jpg">
            <small>Includes 10 kitkat,10 Snickers and 10 diarymilk</small>
            <p>Rs.2300</p>
            <button type="submit" name="btnsubmit2" href=""class="btn">Add to cart</button>
            <a type="submit" href="Customization1.php" class="btn">Customise Chocolates</a>
          </form>
        </div>
        <div class="col4">
          <form action="" method="post">

            <small>Includes 15 Kitakt ,2 pack of Ferrero and a Frame</small>
            <img src="img/IMG_8811.jpg">
            <p>Rs.1100</p>
            <button type="submit" name="btnsubmit3" href=""class="btn">Add to cart</button>
            <a type="submit" href="Customization1.php" class="btn">Customise Chcoclates</a>
          </form>
        </div>

        <div class="col4">
          <form action="" method="post">

            <small>Include 2 Dairymilk silk and 2 Kikat </small>
            <img src="img/IMG_4390.jpg">
            <p>Rs.800</p>
            <button type="submit" name="btnsubmit3" href=""class="btn">Add to cart</button>
            <a type="submit" href="Customization1.php" class="btn">Customise Chocolates</a>
          </form>
        </div>
        <div class="col4">
          <form action="" method="post">

            <small>Includes 3 Bounty,5 Raffello</small>
            <img src="img/IMG_7105.jpg">
            <p>Rs.2100</p>
            <button type="submit" name="btnsubmit3" href=""class="btn">Add to cart</button>
            <a type="submit" href="Customization1.php" class="btn">Customise Chocolates</a>
          </form>
        </div>
        <div class="col4">
          <form action="" method="post">

            <small>Explosion box with 12 kitkat and 10 Dairymik</small>
            <img src="img/IMG_4541.jpg">
            <p>Rs.1300</p>
            <button type="submit" name="btnsubmit3" href=""class="btn">Add to cart</button>
            <a type="submit" href="Customization1.php" class="btn">Customise Chocolates</a>
          </form>
        </div>
        <div class="col4">
          <form action="" method="post">

            <small>Classy Bouquet with 13 Diarymilk</small>
            <img src="img/IMG_4402.jpg">
            <p>Rs.1000</p>
            <button type="submit" name="btnsubmit3" href=""class="btn">Add to cart</button>
            <a type="submit" href="Customization1.php" class="btn">Customise Chocolates</a>
          </form>
        </div>
        <div class="col4">
          <form action="" method="post">

            <small>Includes 1 Dairy Milk Silk,2 Kitkat, 3 pack of Ferrero and a mini scrapbook</small>
            <img src="img/IMG_4960.jpg">
            <p>Rs.900</p>
            <button type="submit" name="btnsubmit3" href=""class="btn">Add to cart</button>
            <a type="submit" href="Customization1.php" class="btn">Customise Chocolates</a>
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
            $user_id=$userid;
            $category_name="Gift Box";
            $Price=900;
            $product ="Includes 3 diarymilk silk,2 kitkat,2 pack of ferrero";


            $Quantity=1;
            $Subtotal=0;
            $image ="img/IMG_9232.jpg"; 

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
          if(isset($_POST['btnsubmit2']))
          {

            $user_id=$userid;
            $category_name="Gift Box";
            $Price=2300;
            $product ="Includes 10 Kitkat,10 Snickers and 10 Dairymilk";

            $Quantity=1;
            $Subtotal=0;
            $image ="img/IMG_7131.jpg"; 

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
         if(isset($_POST['btnsubmit3']))
          {
            
            $user_id=$userid;
            $category_name="Gift Box";
            $Price=1100;
            $product ="Includes 15 Kitakt ,2 pack of Ferrero and a Frame";
            $Quantity=1;
            $Subtotal=0;
            $image ="img/IMG_8811.jpg"; 

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

          if(isset($_POST['btnsubmit3']))
          {
            
            $user_id=$userid;
            $category_name="Gift Box";
            $Price=800;
            $product =">Include 2 Diarymilk silk and 2 Kikat";
            $Quantity=1;
            $Subtotal=0;
            $image ="img/IMG_4390.jpg"; 

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
          if(isset($_POST['btnsubmit3']))
          {
            
            $user_id=$userid;
            $category_name="Gift Box";
            $Price=2100;
            $product ="Includes 3 Bounty,5 Raffello";
            $Quantity=1;
            $Subtotal=0;
            $image ="img/IMG_7105.jpg"; 

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
          if(isset($_POST['btnsubmit3']))
          {
            
            $user_id=$userid;
            $category_name="Gift Box";
            $Price=1300;
            $product ="Explosion box with 12 kitkat and 10 Diarymik";
            $Quantity=1;
            $Subtotal=0;
            $image ="img/IMG_4541.jpg"; 

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
          if(isset($_POST['btnsubmit3']))
          {
            
            $user_id=$userid;
            $category_name="Gift Box";
            $Price=1000;
            $product ="Classy Bouquet with 13 Dairymilk";
            $Quantity=1;
            $Subtotal=0;
            $image ="img/IMG_4402.jpg"; 

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
          if(isset($_POST['btnsubmit3']))
          {
            
            $user_id=$userid;
            $category_name="Gift Box";
            $Price=900;
            $product ="Includes 1 Dairy Milk Silk,2 Kitkat 3 pack of Ferrero and a mini scrapbook";
            $Quantity=1;
            $Subtotal=0;
            $image ="img/IMG_4960.jpg"; 

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