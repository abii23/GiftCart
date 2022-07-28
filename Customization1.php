<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Customization1.scss">

    

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

     
     <div class="small-container">
       
       <div class="row">
         <table>
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
                  <form action="" Method="POST">
                    <img style=" height: 90%; width:30%;padding: 1px;" src="./AAdmin/image/<?php echo $row['Image']; ?>">
                  
                        <p><?php echo $row["Chocolate_name"];?></p>
                        <input type="hidden" name="Chocolate_name"value="<?php echo $row["Chocolate_name"];?>">
                        <input type="hidden" name="Price"value="<?php echo $row["Price"];?>">
                        <input type="hidden" name="Image"value="<?php echo $row["Image"];?>">

                        <small>Price: Rs.<?php echo $row["Price"]; ?></small>
                        <input type="hidden" name="Chocolate_id" value="<?php echo $row["id"];?>">


                       <p><?php echo $row["Remarks"];?></p> <br>
                  <label for="">Quantity:</label>
                    <input style="border:1px solid #ff0000" type="number" name="Quantity"><br>
                    
                        
                        <!-- <bttton name="Customize" value="Add to Cart" class='btn'>Cutomize</bttton> -->
             <?php
             $_Product_id=$_GET["Product_id"];
             $chocolate_name=$row["Chocolate_name"];
             $price=$row["Price"];
            
             ?>
                        <a class="btn" href='Customization1.php?Product_id="<?php echo $_Product_id; ?>Chocolate="<?php echo $chocolate_name; ?>"Price="<?php echo $price; ?>"'>Customize  </a>
                        
                        
                        
                        
                        
                        
                        
                   
                    

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

                              
    <aside style="width:8%;Margin-top:-107%">
      <div class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
        <div class="summary-subtotal">
          <div class="subtotal-title">Subtotal</div>
          <div class="subtotal-value final-value" id="basket-subtotal"></div>
          <div class="summary-promo hide">
            <div class="promo-title">Promotion</div>
            <div class="promo-value final-value" id="basket-promo"></div>
      
          <?php
          include("config.php");

        
								?>
           <?php
						// $slno=1;
						// 	$result=mysqli_query($con,"SELECT  `Subtotal` FROM `cart` WHERE User_id='22222'");
            //   $sum=0;
            //   while($row=mysqli_fetch_array($result))
						// 	{

                
            //     $subtotal=$row["Subtotal"];
            //     $sum=$sum+$subtotal;

            //   }

            // if(isset($_POST['Customize']))
            // {

  //            $Name=$_POST['Chocolate_name'];

  //            $Sname=$sname.$Name;
  //           //  $id = implode(",", $_POST['Chocolate_name']);
  //            $Price=$_POST['Price'];
  // $int_price = (int)$Price;

  //            $Quantity=$_POST['Quantity'];
  //            $int_Quantity=(int)$Quantity;
  //            $chocolateid=$_POST['Chocolate_id'];

$_Product_id=$_GET['Product_id'];

$_Product_id=$_GET["Product_id"];
echo "h";
$chocolate_name=$row["Chocolate_name"];
$price=$row["Price"];
$Quantity=$_POST['Quantity'];


$sum=$int_Quantity*$int_price;
              
            
             
								
								?>
          </div>
        </div>
       

       
             
        
         
       
        
        <div class="total-value final-value" id="basket-total"></div>
        <div class="summary-total">
          <div class="total-title"><?php
         
          echo $chocolate_name;
          
          
          ?> *  <?php echo $Quantity;?></div>
          <?php
            // }
      
      
          ?>
  
          <div class="total-value final-value" id="basket-total"><?php echo $sum;?></div>
        </div>
        <div class="summary-total">
          <div class="total-title">Total</div>
          <div class="total-value final-value" id="basket-total"><?php echo $sum;?></div>
            <div class="summary-checkout">
              <button class="checkout-cta">Go to Secure Checkout</button>
              </div>
        </div>
        </div>
          <?php
          
           
        
        // }
          
          ?>
      </aside>
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











<style>

  .cartcart-info{
    height: 30%;
    width:30%
  }
  </style>