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
            <img name="Image"  src="<?php echo $row["Image"];?>" alt="Placholder Image 2" style=" border: 1px solid #aaa;width: 110%;height:20%;">
          </div>
          <div class="product-details">

          <input name="whatecer" type="hidden" value="<?php echo $row["id"];?>">
         

             <h1><strong style="font-size:160%;color:#980000"><span class="item-quantity"></span> <?php echo $row["Category_name"];?></strong> </h1>
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
          <div class="total-title">Total</div>
          <?php
          include("config.php");

        
								?>
           <?php
						$slno=1;
							$result=mysqli_query($con,"SELECT  `Subtotal` FROM `cart` WHERE User_id='22222'");
              $sum=0;
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



















