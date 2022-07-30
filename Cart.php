<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Cart.scss">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
  <title>Basket</title>
</head>

<body>
  <main>
    <div class="basket">
      <div class="basket-module">
        <label for="promo-code">Enter a promotional code</label>
        <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
        <button class="promo-code-cta">Apply</button>
      </div>
      <div class="basket-labels">
        <ul>
          
          <li class="item item-heading">category</li>
          <li  class="item-heading1"  >Subtotal</li>
          <li class="price">item</li>
          <li class="quantity">price</li>
          <li class="subtotal">Quantity</li>
        </ul>
      </div>
<table style="width:70%">
<form action="" method="POST">



<?php
          include("config.php");

        
								?>
           <?php
						$slno=1;
							$result=mysqli_query($con,"select * from cart");
							while($row=mysqli_fetch_array($result))
							{
								
								?>
          
          
          <div class="basket-product">
        <div class="item">
        <div class="product-image">
          <form action="" method="POST">
            <img name="Image"  src="./AAdmin/image/<?php echo $row['Image']; ?>" alt="Placholder Image 2" style=" border: 1px solid #aaa;width: 110%;height:20%;">
          </div>
          <div class="product-details">

          <input name="whatecer" type="hidden" value="<?php echo $row["id"];?>">
         

             <h1><strong style="font-size:160%;color:#980000"><span class="item-quantity"></span> <?php echo $row["ProductName"];?></strong> </h1>
            <p><strong><?php echo $row["Product"];?></strong></p>
            <!-- <p>Product Code - 232321939</p> -->
          </div>
        </div>
        <div >
        <input name="Price1" type="" value="<?php echo $row["id"];?>">

          <input  name="Price1" type="" class="price" value="<?php echo $row["price"];?>"></div>
        <div class="quantity">
          <input name="quantity" type="number" value="<?php echo $row["Quantity"];?>" min="1" class="quantity-field">


  <input type="submit" name="calculate" value="Check Price" style="marigin-top:20px;"></input>

<?php
include("config.php");
if(isset($_POST['calculate']))
{
  
  $fff=$_POST["whatecer"];            //product id 
  $txt_quantity=$_POST['quantity'];
  $txt_Price=$_POST['Price1'];
  // echo $txt_Price;
  $int_price = (int)$txt_Price;

  // echo gettype($int_price);

// echo "update cart set Quantity='$txt_quantity' where id='$fff'";
$subtotal=$int_price*$txt_quantity;
echo $subtotal;
$save=mysqli_query($con,"update cart set Quantity='$txt_quantity',Subtotal='$subtotal' where id='$fff'");

echo "<script>window.location='Cart.php'</script>";
}

?>
<div></div>

        </div>
        <div class="subtotal" id="subtotal"><?php echo $row["Subtotal"];?></div>
        <div class="remove">
          <button name="delete" >Remove</button>
<?php


if(isset($_POST['delete']))
{
  $fff=$_POST["whatecer"];         //product id
  
  $save=mysqli_query($con,"DELETE FROM `cart` WHERE `cart`.`id` = '$fff'");

  echo "<script>window.location='Cart.php'</script>";

}

  ?>


          </form>  
       
        
            </div>
      </div>

          
          
          
          <?php
								// echo "</tr>";
								
							}
						?>
        </table>
            
</table>
<br>
<h1><strong style="font-size:160%;color:#980000" >Customized Products</strong></h1>
<br>
<table style="width:70%">


<?php
          include("config.php");
          ?>
          <?php
          $slno=1;
          $result=mysqli_query($con,"select * from category");
          while($row22=mysqli_fetch_array($result))
          {
        $Category11_id=$row22['Category_Name'];
       

        // $result=mysqli_query($con,"select * from customized_cart where Category_name='$Category11_id'");
        // while($row22=mysqli_fetch_array($result))
        //   {
        //   $test=$row22["Category_name"];
        //   echo "test";
        //   echo $test;
        //   }
        //   }

      
      ?>
  
                
          <div class="basket-product">
        <div class="item">
        <div class="product-image">
<h2><? echo $row['Category_Name']; ?></h2>
          </div>
          </div>
          </div>
           <?php
						$slno=1;
            $result=mysqli_query($con,"select * from customized_cart where User_id='22222'  ");
            while($row=mysqli_fetch_array($result))
							{
								$test=$row["Category_name"];
               
								?>
          
          
          <div class="basket-product">
        <div class="item">
        <div class="product-image">
          <form action="" method="POST">
            <img name="Image"  src="./AAdmin/image/<?php echo $row['Image']; ?>" alt="Placholder Image 2" style=" border: 1px solid #aaa;width: 110%;height:20%;">
          </div>
          <div class="product-details">

          <input name="whatecer" type="hidden" value="<?php echo $row["id"];?>">
         

             <h1><strong style="font-size:160%;color:#980000"><span class="item-quantity"></span> <?php echo $row["ProductName"];?></strong> </h1>
            <p><strong><?php echo $row["Product"];?></strong></p>
            <!-- <p>Product Code - 232321939</p> -->
          </div>
        </div>
        <div >
        <input name="Price1" type="" value="<?php echo $row["id"];?>">

          <input  name="Price1" type="" class="price" value="<?php echo $row["Price"];?>"></div>
        <div class="quantity">
          <input name="quantity" type="number" value="<?php echo $row["Quantity"];?>" min="1" class="quantity-field">


  <input type="submit" name="calculate" value="Check Price" style="marigin-top:20px;"></input>

<?php
include("config.php");
if(isset($_POST['calculate']))
{
  
  $fff=$_POST["whatecer"];            //product id 
  $txt_quantity=$_POST['quantity'];
  $txt_Price=$_POST['Price1'];
  // echo $txt_Price;
  $int_price = (int)$txt_Price;

  // echo gettype($int_price);

// echo "update cart set Quantity='$txt_quantity' where id='$fff'";
$subtotal=$int_price*$txt_quantity;
echo $subtotal;
$save=mysqli_query($con,"update cart set Quantity='$txt_quantity',Subtotal='$subtotal' where id='$fff'");

echo "<script>window.location='Cart.php'</script>";
}

?>
<div></div>

        </div>
        <div class="subtotal" id="subtotal"><?php echo $row["Subtotal"];?></div>
        <div class="remove">
          <button name="delete" >Remove</button>
           
<?php


if(isset($_POST['delete']))
{
  $fff=$_POST["whatecer"];         //product id
  
  $save=mysqli_query($con,"DELETE FROM `cart` WHERE `cart`.`id` = '$fff'");
  
  echo "<script>window.location='Cart.php'</script>";
  
}

?>


          </form>  
       
        
            </div>
      </div>

          
          
         
        </table>
<?php
      echo "</tr>";
      
    }
    
  
    
  
  ?>
            
         
</table>
     <?php
      
  }
      ?>   









            </div>
          

          
      <aside style="width:8%">
        <div class="summary">
          <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
          <div class="summary-subtotal">
            <div class="subtotal-title">Subtotal</div>
            <div class="subtotal-value final-value" id="basket-subtotal"></div>
            <div class="summary-promo hide">
              <div class="promo-title">Promotion</div>
              <div class="promo-value final-value" id="basket-promo"></div>
            </div>
          </div>
          <div class="summary-total">
            <Form method="Post" Action="">
              
            
            <div class="total-title">Total</div>
             <?php
            include("config.php");
            // session_start();
            


                  ?> 
            <?php
              $slno=1;
                $result=mysqli_query($con,"SELECT  * FROM `cart` WHERE User_id='22222'");
                $sum=0;
                while($row=mysqli_fetch_array($result))
                {

                  
                  $subtotal=$row["Subtotal"];
                  $sum=$sum+$subtotal;
                  ?>
                  
                  <input type="hidden"  name="User_id" value="<?php echo $row['User_id']; ?>">
                  <input type="hidden"  name="Category_name" value="<?php echo $row["Category_name"]; ?>">
                  <input type="hidden"  name="Product_name" value="<?php echo $row["ProductName"]; ?>">
                  <input type="hidden"  name="ProductDetails" value="<?php echo $row["Product"]; ?>">

                  <input type="hidden"  name="Price" value="<?php echo $row["price"]; ?>">
                  <input type="hidden"  name="Quantity" value="<?php echo $row["Quantity"]; ?>">
                  <input type="hidden"  name="Subtotal" value="<?php echo $row["Subtotal"]; ?>">
                  <input type="hidden"  name="Image" value="<?php echo $row["Image"]; ?>">

                  <?php

                }

                ?>
                <?php 
                
                $result=mysqli_query($con,"SELECT  * FROM `customized_cart` WHERE User_id='22222'");
                
                while($row3=mysqli_fetch_array($result))
                {
                  
                  
                  $subtotal=$row3["Subtotal"];
                  $sum=$sum+$subtotal;
                  ?>

                  <!-- <input type="hidden"  name="cart_id" value="<?php echo $row["id"]; ?>"> -->



                  <!-- <input type="hidden"  name="Customizedcart_id" value="<?php echo $row3["id"]; ?>"> -->
                  <input type="hidden"  name="User_id" value="<?php echo $row3['User_id']; ?>">
                  <input type="hidden"  name="Category_name" value="<?php echo $row3["Category_name"]; ?>">
                  <input type="hidden"  name="Product_name" value="<?php echo $row3["ProductName"]; ?>">
                  <input type="hidden"  name="ProductDetails" value="<?php echo $row3["Product"]; ?>">

                  <input type="hidden"  name="Price" value="<?php echo $row3["Price"]; ?>">
                  <input type="hidden"  name="Quantity" value="<?php echo $row3["Quantity"]; ?>">
                  <input type="hidden"  name="Subtotal" value="<?php echo $row3["Subtotal"]; ?>">
                  <input type="hidden"  name="Image" value="<?php echo $row3["Image"]; ?>">
                  
                  <?php
                  $cart_id=$row3['id'];
                  
                 
  
                }
              
                  
                  ?>
            <div class="total-value final-value" id="basket-total"><?php echo $sum;?></div>
          </div>
          <div class="summary-checkout">
            <button type="Submit" name="Checkout" class="checkout-cta">
              
            <?php 
            echo "d";
            ?>
              <a href="Booking.php?cart_id='<?php echo $row['id'];?>'">

                Go to Secure Checkout
              </a>
          </button>
            
          </div>
          </Form>
        </div>
      </aside>
  </main>
</body>

</html>

<?php



?>



















