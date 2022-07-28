
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Booking.Scss">
</head>
<body>
    


<h2>Responsive Checkout Form</h2>
<p>Please checkout and pay us, before you run away.</p>
<div class="row">
    <div class="col-75">
        <div class="container">

            <form action="BookingAction.php" method="POST">

                <div class="row">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="">
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="">
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="">

                        <div class="row">
                            <div class="col-50">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state" placeholder="">
                            </div>
                            <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="">
                        <label for="ccnum">Credit card number</label>
                        <input type="number" id="ccnum" name="cardnumber" placeholder="">
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="">
                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="">
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="">
                            </div>
                        </div>
                    </div>

                </div>
                <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label>
                <input type="submit" value="Continue to checkout" class="btn">
            </form>
        </div>
    </div>
    <div class="col-25">
        <div class="container">
            <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
        <?php

        include('config.php');
						$slno=1;
                        $sum=0;
                        $sum1=0;
            $result=mysqli_query($con,"select * from customized_cart where User_id='22222'  ");
            while($row=mysqli_fetch_array($result))
							{
								$test=$row["Category_name"];
                                $sum1=$sum1+$row["Subtotal"];               
								?>
            <p><a href="#"><?php echo $row['ProductName'] ?> </a> <span class="price"><?php echo $row['Subtotal'] ?></span></p>
            
            <?php
                            }
            ?>
            <?php


                $slno=1;
                $sum=0;
    $result=mysqli_query($con,"select * from cart where User_id='22222'  ");
    while($row1=mysqli_fetch_array($result))
                    {
                        $test=$row1["Category_name"];
                        $sum=$sum+$row1["Subtotal"];               
                        ?>
    <p><a href="#"><?php echo $row1['ProductName'] ?> </a> <span class="price"><?php echo $row1['Subtotal'] ?></span></p>
    
    <?php
                    }
                $sum=$sum+$sum1;
    ?>
            <hr>
            <p>Total <span class="price" style="color:black"><b><?php echo $sum; ?></b></span></p>
        </div>
    </div>
</div>
</body>
</html>