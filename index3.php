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
  </head>
<body>
  

  
   


    <div class="small-container">
      <div class="row">
   <?php
          include("config.php");

        
								?>
           <?php
						$slno=1;
							$result=mysqli_query($con,"select * from category");
							while($row=mysqli_fetch_array($result))
							{
								
								?>

    
        <div class="col4">
            <form action="Editcategory.php" method="POST">

                <img src="./AAdmin/image/<?php echo $row['Image']; ?>">
                <h4 ><?php echo $row["Category_Name"];?></h4>
                <input  type="hidden" name="CategoryId" value="<?php echo $row["Cat_id"];?>">
                <a type="submit"  value="" href='Product.php?Cat_id=<?php echo $row['Cat_id']?>'   class="btn">Shop Now &#8594;</a>
               

                <!-- <td><a href='Editcategory.php?Cat_Id=".$row ['Cat_id'].">Edit</a> -->
            </form>
           

        </div>
       
        <?php
                                    // echo "</tr>";
                                    
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