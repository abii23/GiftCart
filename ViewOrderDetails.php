

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW MORE DETAILS</title>
    <link rel="stylesheet" href="ViewOrderDetails.scss">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

</head>
<body>
    

<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card border-top border-bottom border-3" style="border-color: #f37a27 !important;">
          <div class="card-body p-5">

            <p class="lead fw-bold mb-5" style="color: #f37a27;">Purchase Reciept</p>
<?php


$Booking_id=$_GET['Booking_id'];

include("config.php");




  $slno=1;
      $result=mysqli_query($con,"select * from bookeddetails where id=$Booking_id");

      
      
      //   echo "select * from bookeddetails where id='$Booking_id'";
      $row=mysqli_fetch_array($result);
      
          $user_id=$row['User_id'];
    
          $result=mysqli_query($con,"select * from bookingdetails where User_id=$user_id");
          $row2=mysqli_fetch_array($result);
          $Category_id=$row['Category_name'];
          $result=mysqli_query($con,"select * from category where Cat_id='$Category_id'");
          $row3=mysqli_fetch_array($result);
        
          echo $row3['Category_Name'];
          ?>



            <div class="row">
              <div class="col mb-3">
                <p class="small text-muted mb-1">Date</p>
                <p>10 April 2021</p>
              </div>
              <div class="col mb-3">
                <p class="small text-muted mb-1">Order No.</p>
                <p>012j1gvs356c</p>
              </div>
            </div>
            <div class="col mb-3">
                <p class="small text-muted mb-1">NAME:</p>
                <p><?php echo $row2['Name']; ?> </p>
              </div>
            </div>
            <div class="col mb-3">
                <p class="small text-muted mb-1">ADDRESS:</p>
                <p><?php echo $row2['Address']; ?> </p>
                <p><?php echo $row2['City']; ?> </p>
                <p><?php echo $row2['Zip']; ?> </p>
                <p><?php echo $row2['State']; ?> </p>



                
              </div>
            </div>


<h2>Products</h2>
        

            <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
              <div class="row">
                <div class="col-md-8 col-lg-9">
                  <p><?php echo $row3['Category_Name']; ?></p>
                </div>
                <div class="col-md-4 col-lg-3">
                  <p>Rs.<?php echo $row['price']; ?> </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-lg-9">
                  <p class="mb-0">Quantity</p>
                </div>
                <div class="col-md-4 col-lg-3">
                  <p class="mb-0">×<?php echo $row['Quantity'];?></p>
                </div>
      </div>
              <div class="row">
                <div class="col-md-8 col-lg-9">
                  <p class="mb-0">Shipping</p>
                </div>
                <div class="col-md-4 col-lg-3">
                  <p class="mb-0">+ Free</p>
                </div>
              </div>
            </div>

            <div class="row my-4">
              <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                <p class="lead fw-bold mb-0" style="color: #f37a27;">Rs.<?php echo $row['Subtotal'];?></p>
              </div>
            </div>

            <p class="lead fw-bold mb-4 pb-2" style="color: #f37a27;">Tracking Order</p>

            <div class="row">
              <div class="col-lg-12">

                <div class="horizontal-timeline">



                  <ul class="list-inline items d-flex justify-content-between">
                    <li class="list-inline-item items-list">
                      <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Ordered</p
                        class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                    </li>
                    <li class="list-inline-item items-list">
                      <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Shipped</p
                        class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                    </li>
                    <li class="list-inline-item items-list">
                      <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">On the way
                      </p>
                    </li>
                  <li class="list-inline-item items-list">
                      <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">DELIVERED
                    </li>
                    
                  </ul>

                  <h2>Current Status:</h2>
                  
                      <p class="" style="color: #f37a27;"><?php echo $row['Status']; ?>
                    
                </div>

              </div>
            </div>
            <?php
      
            ?>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>


