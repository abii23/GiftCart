<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="CategoryView.css">
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
       
            <form action="EditChocolate.php" Method="POST">
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
                    <img style=" height: 90%; width:30%;padding: 1px;" src="./image/<?php echo $row['Image']; ?>">
                    <div>
                        <p><?php echo $row["Chocolate_name"];?></p>
                        <small>Price: <?php echo $row["Price"];?></small>
                        <input type="hidden" name="Chocolate_id" value="<?php echo $row["id"];?>">

                       <p><?php echo $row["Remarks"];?></p>

                    
                        <br>
                        
                        <a href='DeleteChocolate.php?chocolateid=<?php echo $row['id']?>' class='btn'>Remove</a>
 
                        
                        
                        
                        
                        
                        
                        <a href='EditChocolate.php?chocolateid=<?php echo $row['id']?>' class='btn'>Edit</a>
                        
                   
                    

                        <!-- <button type="Submit"  Value="" class="btn">
                            Edit
                            
                        </button> -->
                    </form>
                        
                    </div>
                </div>
                
            </tr>
            

        <!-- </tr>
        <tr> -->
        <?php
                                     echo "</tr>";
                                    
                                }
                            ?>

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
        <table>
        
            <tr>
                <td>Total</td>
                <td>Rs.0</td>

            </tr>

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
    <select>

        <script src="cart.js"></script>
       </select>
</body>
</html>