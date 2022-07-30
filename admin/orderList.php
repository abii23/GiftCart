<?php
session_start();
$userid=$_SESSION["user_id"];
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="orderList.css">
  <title>Basket</title>
</head>

<body>
  <main>
    
      <div class="basket-labels">
        <ul>
          
          <li class="" style="margin-left:2%">category</li>
          <li class=""style="margin-left:6%">item</li>
          <li class="" style="margin-left:15%">price</li>
          <li class=""style="margin-left:12%">Quantity</li>
          <li class=""style="margin-left:18%">Subtotal</li>
        </ul>
      </div>
<table style="width:70%">


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
           
            <img src="<?php echo $row["Image"] ?>" alt="Placholder Image 2" class="product-frame">
          </div>
          <div class="product-details">

          <form action="" method="POST">
          <input name="whatecer" type="hidden" value="<?php echo $row["id"];?>">

             <h1><strong style="font-size:160%;color:#980000"><span class="item-quantity"></span> <?php echo $row["Category_name"];?></strong> </h1>
            <p><strong><?php echo $row["Product"];?></strong></p>
            <!-- <p>Product Code - 232321939</p> -->
          </div>
        </div>
        <div >
        <!-- <input name="Price1" type="hidden" value="<?php echo $row["id"];?>"> -->

          <input  name="Price1" type="" class="price" value="<?php echo $row["price"];?>"></div>
        <div class="quantity">
          <input name="quantity" type="number" value="<?php echo $row["Quantity"];?>" min="1" class="quantity-field">

          <?php
          $sum=0;
$quantity=$row["Quantity"];
$price =$row["price"];
$sum=$quantity*$price;




          ?>
          <input   type="" name="price1" class="price" value="RS.<?php echo $sum;?>"></div>

  <!-- <input type="submit" name="calculate" value="Check Price" style="marigin-top:20px;"></input> -->

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
        <!-- <div class="subtotal" id="subtotal"><?php echo $row["Subtotal"];?></div>
        <div class="remove"> -->
          <!-- <button name="delete" >Remove</button> -->
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
								echo "</tr>";
								
							}
						?>
        </table>
            
</table>




<table style="width:70%">


<?php
          include("config.php");

        
								?>
           <?php
						$slno=1;
							$result=mysqli_query($con,"select * from chocolate");
							while($row=mysqli_fetch_array($result))
							{
								
								?>
          
          
      <div class="basket-product">
        <div class="item">
          <div class="product-image">
           
          <img src="<?php  echo $row["Image"] ?>" alt="Placholder Image 2" class="product-frame">
          </div>
          <div class="product-details">

          <form action="" method="POST">
          <input name="whatecer" type="hidden" value="<?php echo $row["id"];?>">

             <h1><strong style="font-size:160%;color:#980000"><span class="item-quantity"></span> <?php echo $row["Category"];?></strong> </h1>
            <p><strong><?php echo $row["Chocolate_name"];?> x <?php echo $row["Quantity"];?> </strong></p>
            <!-- <p>Product Code - 232321939</p> -->
          </div>
        </div>
        <div >
        <input name="Price1" type="" value="<?php echo $row["id"];?>">

            <input  name="Price1" type="" class="price" value="<?php echo $row["Price"];?>"></div>
        <div class="quantity">
          <input name="quantity" type="number" value="<?php echo $row["Quantity"];?>" min="1" class="quantity-field">

          <?php
          $sum=0;
$quantity=$row["Quantity"];
$price =$row["Price"];
$sum=$quantity*$price;




          ?>
          <input   type="Price1" class="price" value="<?php echo $sum;?>"></div>


  <!-- <input type="submit" name="calculate" value="Check Price" style="marigin-top:20px;"></input> -->

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
$save=mysqli_query($con,"update chocolate set Quantity='$txt_quantity',Subtotal='$subtotal' where id='$fff'");

echo "<script>window.location='Cart.php'</script>";
}

?>
<div></div>

        </div>
        <!-- <div class="subtotal" id="subtotal"><?php echo $row["Subtotal"];?></div> -->
        <!-- <div class="remove">
          <button name="delete" >Remove</button> -->
<?php


if(isset($_POST['delete']))
{
  $fff=$_POST["whatecer"];         //product id
  
  $save=mysqli_query($con,"DELETE FROM `Chocolate` WHERE `Chocolate`.`id` = '$fff'");

  echo "<script>window.location='Cart.php'</script>";

}

  ?>


          </form>  
       
        
            </div>
      </div>

          
          
          
          <?php
								echo "</tr>";
								
							}
						?>
        </table>
            
</table>







            </div>
            </div>
    <aside style="width:8%">
      <div class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
        <div class="summary-subtotal">
          <div class="subtotal-title">Subtotal</div>
          <div class="subtotal-value final-value" id="basket-subtotal">130.00</div>
          <div class="summary-promo hide">
            <div class="promo-title">Promotion</div>
            <div class="promo-value final-value" id="basket-promo"></div>
          </div>
        </div>
        <div class="summary-delivery">
          <select name="delivery-collection" class="summary-delivery-selection">
              <option value="0" selected="selected">Select Collection or Delivery</option>
             <option value="collection">Collection</option>
             <option value="first-class">Royal Mail 1st Class</option>
             <option value="second-class">Royal Mail 2nd Class</option>
             <option value="signed-for">Royal Mail Special Delivery</option>
          </select>
        </div>
        <div class="summary-total">
          <div class="total-title">Total</div>
          <?php
          include("config.php");

        
								?>
           <?php
						$slno=1;
							$result=mysqli_query($con,"SELECT  `Subtotal` FROM `cart`");
              $sum=0;
              while($row=mysqli_fetch_array($result))
							{

                
                $subtotal=$row["Subtotal"];
                $sum=$sum+$subtotal;

              }
              $result=mysqli_query($con,"SELECT  `Subtotal` FROM `Chocolate` WHERE User_id='$userid'");
             
              while($row=mysqli_fetch_array($result))
							{

                
                $subtotal=$row["Subtotal"];
                $sum=$sum+$subtotal;

              }
								
								?>
          <div class="total-value final-value" id="basket-total"><?php echo $sum;?></div>
        </div>
        <div class="summary-checkout">
          <button class="checkout-cta">Go to Secure Checkout</button>
          
        </div>
      </div>
    </aside>
  </main>
</body>

</html>



















