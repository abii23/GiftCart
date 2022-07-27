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
   <script src="cart.js" async></script>
  </head>
<body>
  

  
   <div class="container">    
      <div class="navbar">
         <div class="logo">
            <img src="img/logo.jpg" width="50px">
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
  
   <!------cart items----->
   <div class="small-container cart-page">

   <table>
        <tr>
            <th>Chocolate</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
       
        <div class="small-container">
  <div class="row">
            <form action="CustomizationAction.php" Method="POST">
            <tr>
                <?php
          include("config.php");

        
								?>
                <div class="cartcart-info">

           <?php
						$slno=1;
							$result=mysqli_query($con,"select * from chocolate");
							while($row=mysqli_fetch_array($result))
							{
								
								?>
                <div class="col4">
                    <img style=" height: 90%; width:30%;padding: 1px;" src="./AAdmin/image/<?php echo $row['Image']; ?>">
                  
                        <p><?php echo $row["Chocolate_name"];?></p>
                        <input type="hidden" name="Chocolate_name"value="<?php echo $row["Chocolate_name"];?>">
                        <input type="hidden" name="Price"value="<?php echo $row["Price"];?>">
                        <input type="hidden" name="Image"value="<?php echo $row["Image"];?>">

                        <small>Price: Rs.<?php echo $row["Price"]; ?></small>
                        <input type="hidden" name="Chocolate_id" value="<?php echo $row["id"];?>">

                       <p><?php echo $row["Remarks"];?></p>
                  <label for="">Quantity:</label><br>
                    <input type="number" name="Quantity"><br>
                    <label for="">Enter Description</label><br>
                    <textarea name="description" id="" cols="30" rows="10"></textarea><br>
                        <br>
                        
                        <button type="Submit" value="Add to Cart" class='btn'></button>
 
                        
                        
                        
                        
                        
                        
                        
                   
                    

                        <!-- <button type="Submit"  Value="" class="btn">
                            Edit
                            
                        </button> -->
                    </form>
                        
                    </div>
        <?php
                                     echo "</tr>";
                                    
                                }
                            ?>
                            </table>
                </div>
              </div>
                
            
            

        <!-- </tr>
        <tr> -->

                              </div>
<!-- 
            <form action="" Method="POST">
            <td>

                <div class="cart-info">

                   
                    <img style=" height: 90%; width:30%;padding: 1px;" src="img/silk.jpg">
                    <div>
                        <p>Diarymilk silk</p>
                        <small>price:80</small>
                        
                        <br>
                        <a href=""class="btn">Remove</a>
                       
                    </div>
                </div>
            </td>
         
          <td>

              <button  type ="submit" name="btnSubmit2" class="btn">Add to cart</button>
          </td>

            </form>  -->
        <!-- </tr>
        <tr> -->

           

         
           

           
        


            
           
       
    </table>

     <div class="total-price">
       
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
    <select>

        <script src="cart.js"></script>
       </select>
</body>
</html>




<?php


include("config.php");
          if(isset($_POST['btnSubmit1']))
          {
            $user_id=22222;
            $chocolate_name="Dairy Milk";
            $Price=20;
            $Category ="Gift hampers";
           

            $Quantity=$_POST['quantity'];
            $Subtotal=0;

            $save=mysqli_query($con,"insert into chocolate(User_id,Chocolate_name,Quantity,Subtotal,price,Category)values('$user_id','$chocolate_name','$Quantity','$Subtotal','$Price','$Category')");
        //   echo "insert into chocolate(User_id,Chocolate_name,Quantity,Subtotal,price,Category)values('$user_id','$chocolate_name','$Quantity','$Subtotal','$Price','$Category')";
          
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
            $chocolate_name="Dairy Milk Silk";
            $Price=80;
            $Category ="Gift hampers";
           

            $Quantity=$_POST['quantity'];
            $Subtotal=0;

            $save=mysqli_query($con,"insert into chocolate(User_id,Chocolate_name,Quantity,Subtotal,price,Category)values('$user_id','$chocolate_name','$Quantity','$Subtotal','$Price','$Category')");
        //   echo "insert into chocolate(User_id,Chocolate_name,Quantity,Subtotal,price,Category)values('$user_id','$chocolate_name','$Quantity','$Subtotal','$Price','$Category')";
          
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
            $chocolate_name="Kitkat";
            $Price=25;
            $Category ="Gift hampers";
           

            $Quantity=$_POST['quantity'];
            $Subtotal=0;

            $save=mysqli_query($con,"insert into chocolate(User_id,Chocolate_name,Quantity,Subtotal,price,Category)values('$user_id','$chocolate_name','$Quantity','$Subtotal','$Price','$Category')");
        //   echo "insert into chocolate(User_id,Chocolate_name,Quantity,Subtotal,price,Category)values('$user_id','$chocolate_name','$Quantity','$Subtotal','$Price','$Category')";
          
            if($save)
            {
            
              echo "<script>alert('ADDED TO CART!!!'); </script>";

            }
            else
            {
            
                echo "<script>alert('FAILED!!!'); </script>";
            }


          
          }
          if(isset($_POST['btnSubmit4']))
          {
            $user_id=22222;
            $chocolate_name="Ferrero Rocher";
            $Price=35;
            $Category ="Gift hampers";
           

            $Quantity=$_POST['quantity'];
            $Subtotal=0;

            $save=mysqli_query($con,"insert into chocolate(User_id,Chocolate_name,Quantity,Subtotal,price,Category)values('$user_id','$chocolate_name','$Quantity','$Subtotal','$Price','$Category')");
        //   echo "insert into chocolate(User_id,Chocolate_name,Quantity,Subtotal,price,Category)values('$user_id','$chocolate_name','$Quantity','$Subtotal','$Price','$Category')";
          
            if($save)
            {
            
              echo "<script>alert('ADDED TO CART!!!'); </script>";

            }
            else
            {
            
                echo "<script>alert('FAILED!!!'); </script>";
            }


          
          }

          if(isset($_POST['btnSubmit5']))
          {
            $user_id=22222;
            $chocolate_name="Raffello";
            $Price=35;
            $Category ="Gift hampers";
           

            $Quantity=$_POST['quantity'];
            $Subtotal=0;

            $save=mysqli_query($con,"insert into chocolate(User_id,Chocolate_name,Quantity,Subtotal,price,Category)values('$user_id','$chocolate_name','$Quantity','$Subtotal','$Price','$Category')");
        //   echo "insert into chocolate(User_id,Chocolate_name,Quantity,Subtotal,price,Category)values('$user_id','$chocolate_name','$Quantity','$Subtotal','$Price','$Category')";
          
            if($save)
            {
            
              echo "<script>alert('ADDED TO CART!!!'); </script>";

            }
            else
            {
            
                echo "<script>alert('FAILED!!!'); </script>";
            }


          
          }
          if(isset($_POST['btnSubmit6']))
          {
            $user_id=22222;
            $chocolate_name="Galaxy";
            $Price=45;
            $Category ="Gift hampers";
           

            $Quantity=$_POST['quantity'];
            $Subtotal=0;

            $save=mysqli_query($con,"insert into chocolate(User_id,Chocolate_name,Quantity,Subtotal,price,Category)values('$user_id','$chocolate_name','$Quantity','$Subtotal','$Price','$Category')");
        //   echo "insert into chocolate(User_id,Chocolate_name,Quantity,Subtotal,price,Category)values('$user_id','$chocolate_name','$Quantity','$Subtotal','$Price','$Category')";
          
            if($save)
            {
            
              echo "<script>alert('ADDED TO CART!!!'); </script>";

            }
            else
            {
            
                echo "<script>alert('FAILED!!!'); </script>";
            }


          
          }
          if(isset($_POST['btnSubmit7']))
          {
            $user_id=22222;
            $chocolate_name="Snickers";
            $Price=45;
            $Category ="Gift hampers";
           

            $Quantity=$_POST['quantity'];
            $Subtotal=0;

            $save=mysqli_query($con,"insert into chocolate(User_id,Chocolate_name,Quantity,Subtotal,price,Category)values('$user_id','$chocolate_name','$Quantity','$Subtotal','$Price','$Category')");
        //   echo "insert into chocolate(User_id,Chocolate_name,Quantity,Subtotal,price,Category)values('$user_id','$chocolate_name','$Quantity','$Subtotal','$Price','$Category')";
          
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














<style>

  .cartcart-info{
    height: 30%;
    width:30%
  }
  </style>