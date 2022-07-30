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
         <img src="/Day 1/image/menu.png" class="menu-icon" onclick="menutoggle()">
      </div>
       
   </div>
   
   
   <div class="small-containe">
       <div class="row">
                <form action="" method="POST">
      <select  name="Category_id"  class="form-control" >
         <option value=0>------Select----</option>
      <?php
         include ("config.php"); 
         $result=mysqli_query($con, "SELECT * from category ");
        // echo "SELECT * from tbl_candidatebasicdetails WHERE username='$username' AND password='$password'";
         //$row=mysqli_fetch_array($result);
         while($row=mysqli_fetch_array($result)) 
         { 

        ?>
          <option value="<?php echo $row['Cat_id'] ?>"  > <?php echo $row['Category_Name'];?> </option>
        <?php }
    
    ?> 
    <input type="submit" name="selectedCat">
</form>
    </select>
</div>
</div>
<BR></BR>
   <div class="small-container">
      <div class="row">
   <?php

          include("config.php");

        
								?>
           <?php
           if(isset($_POST['selectedCat']))
           {
$EnterCategoryId =$_POST['Category_id'];


          

						$slno=1;
							$result=mysqli_query($con,"select * from productname where Category_id='$EnterCategoryId'");
							while($row=mysqli_fetch_array($result))
							{
								$product_id=$row['ProductId'];
               
								?>

    
        <div class="col4">
            <form action="EditProduct.php" method="POST">

                <img src="./image/<?php echo $row['Image']; ?>">
                <h4 ><?php echo $row["ProductName"];?></h4>
                <p><?php echo $row["ProductsDetails"];?></p>
                <label for="">Price:</label><br>
                <p><?php echo $row["Price"];?></p>
                <label for="">remarks</label>
                <p><?php echo $row["Remarks"];?></p>

                <input  type="hidden" name="CategoryId" value="<?php echo $row["ProductId"];?>">
                <!-- <input type="submit"  value="Edit &#8594;" href=EditProduct.php?Product_id=<?php echo $row['ProductId']?>'  class="btn"></input> -->
               <a class='btn' href='EditProduct.php?Product_id=<?php echo $row['ProductId']?>'>edit &#8594; </a>

                <!-- <td><a href='Editcategory.php?Cat_Id=".$row ['Cat_id'].">Edit</input> -->
         

                            </form>

<form action="DeleteProduct.php"method="POST">

    <input   type="hidden" name="CategoryId" value="<?php echo $row["ProductId"];?>">
    <button type="submit" name="delete3" class="btn" value ="delete">Delete

  </button>
</form>



        </div>
        <!-- <div class="col4">
          <img src="img/IMG_2532.jpg">
          <h4>GIFT BOX</h4>
          <a href="product1.php"class="btn">Shop Now &#8594;</a>
        </div> -->
        <!-- <div class="col4">
          <img src="img/IMG_4396.jpg">
          <h4>FRAME</h4>
          <a href="frame.html"class="btn">Shop Now &#8594;</a>
        </div> -->
        <?php
                                    // echo "</tr>";
}   
                                }
                            ?>
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

</body>
</html>