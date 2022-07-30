<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="FrameAction.scss">
</head>
<body>
    
    
    <?php
include('config.php');
error_reporting(0);

$msg = "";


$filename=$_FILES["uploadFile"]["name"];
$tempname=$_FILES["uploadFile"]["tmp_name"];
$folder = "./image/" . $filename;



$product_id=$_POST['Product_id'];


$result=mysqli_query($con,"select * from productname where ProductId='$product_id'");
// echo "select * from productname where ProductId='$product_id'";
$row=mysqli_fetch_array($result);






?>

<div class="frame" style="background-image: url('./AAdmin/image/<?php echo $row['Image']; ?>');" >
    <img  src="./AAdmin/image/<?php echo $filename; ?>">
</div>
</body>
</html>