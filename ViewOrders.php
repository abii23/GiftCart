<?php
session_start();
$userid=$_SESSION["user_id"];
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="ViewOrder.scss">
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
    </form>
    <table style="width:70%">
        <form action="" method="POST">
        
            <div style="margin-right:50%">
        
                
            </div>




            <form action="" method="POST">
<?php
          include("config.php");

        
								?>
           <?php
          include("config.php");
          
          
          
                      
                                  $slno=1;
                                      $result=mysqli_query($con,"select * from bookeddetails where User_id='$userid'");
                                      
                                      
                                      while($row=mysqli_fetch_array($result))
                                      
                                      {
                                          ?>
          
          <div class="basket-product">
              <div class="item">
                  <div class="product-image">
                      <img name="Image"  src="./AAdmin/image/<?php echo $row['Image']; ?>" alt="Placholder Image 2" style=" border: 1px solid #aaa;width: 110%;height:20%;">
                    </div>
                    <div class="product-details">
                        
                        <input name="whatecer" type="hidden" value="<?php echo $row["id"];?>">
                        <?php
                                           
                                           $category_name=$row['Category_name'];   
                                 
                                       $result=mysqli_query($con,"select * from category where Cat_id='$category_name'");
                                       $row2=mysqli_fetch_array($result);
                                 
                                           $book_ID=$row['id'];


         ?>

             <h1><strong style="font-size:160%;color:#980000"><span class="item-quantity"></span> <?php echo $row2["Category_Name"];?></strong> </h1>
            
             <h3><strong style="font-size:160%;color:#980000"><span class="item-quantity"></span> <?php echo $row["ProductName"];?></strong> </h3>

             <p><strong><?php echo $row["Product"];?></strong></p>
            <!-- <p>Product Code - 232321939</p> -->
          </div>
        </div>
        <div >
        <input name="Price1" type="" value="<?php echo $row["id"];?>">

          <input  name="Price1" type="" class="price" value="<?php echo $row["price"];?>"></div>
        <div class="quantity">
          <input name="quantity"  value="<?php echo $row["Quantity"];?>" min="1" class="quantity-field">



  <!-- <input type="submit" name="calculate" value="Check Price" style="marigin-top:20px;"></input> -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <p>Status : <?php echo $row['Status'] ?></p>
  <br>
  <p>Ordered on: <?php echo $row['Date'] ?></p>
 

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
         
             
        <a href="ViewOrderDetails.php?Booking_id='<?php echo $book_ID ?>'">
            View order Details
        </a>  
       





        
<?php


if(isset($_POST['delete']))
{
  $fff=$_POST["whatecer"];         //product id
  
  $save=mysqli_query($con,"DELETE FROM `cart` WHERE `cart`.`id` = '$fff'");

  echo "<script>window.location='Cart.php'</script>";

}

  ?>


          
       
        
            </div>
      </div>

          
          
          
          <?php
								// echo "</tr>";
								
							}
                        
						?>
        </table>
            
</table>
<br>

   
  </main>
</body>

</html>

<?php



?>



















