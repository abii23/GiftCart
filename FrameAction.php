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



<!-- RESIZE .box Element (drag bottom-right corner) -->
<div class='box'>


<img src="./AAdmin/image/<?php echo $filename; ?>">
</div>

</body>
</html>
<style>

.box{
  // unneeded stuff for demo only
  width: 12%;
  height: 49%;
  margin: auto;
  position: absolute;
  top:0; left:39%; right:39%; bottom:0;
  background: Cornsilk;
  border-image: url('./AAdmin/image/<?php echo $row['Image']; ?>') 42 stretch stretch; 
  border-width: 40px;
  border-style: inset;
  box-shadow: 0 0 20px rgba(black, .2),
              0 5px 5px 0px rgba(black, .3);
  
  // The magic
  > img{
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    transform: translate(-50%, -50%); 
    
    &.max{ width:auto; height:100%; }
  }
}

.box{
  resize: both;
  overflow: hidden;
}

@mixin bricks-bg {
  $brick-corner-color: #FFF;
  $brick-cement-color: #FFF;
  $brick-color: BlanchedAlmond;
  $brick-color2: darken($brick-color, 5);
  
  background: 
    linear-gradient(163deg, transparent 0px, transparent 1px, $brick-color 1px, $brick-color 14px, transparent 14px),
    linear-gradient(161deg, transparent 0px, $brick-corner-color 2px, $brick-color 2px, $brick-color 16px, transparent 16px),
    linear-gradient(343deg, transparent 0px, transparent 1px, $brick-color2 1px, $brick-color 14px, transparent 14px),
    linear-gradient(343deg, transparent 0px, transparent 1px, $brick-color2 1px, $brick-color 14px, transparent 14px);
  background-color: $brick-cement-color;
  background-size: 48px 30px;
  background-position: 2px  1px, 
                       23px 16px,
                       48px 15px, 
                       21px 30px;
}

body{
  @include bricks-bg; 
}

/* RESET & stuff */
*{ margin:0; padding:0; }
</style>

<script>
// Detects when the window width is too narrow for the current image 
// aspect-ratio, and fits it to height 100% instead of width 100%.
const photo = document.images[0]

const onPhotoResize = new ResizeObserver(entries => 
  window.requestAnimationFrame(checkRatio)
)

onPhotoResize.observe(photo.parentNode)

function checkRatio(){
  const imageAspectRatio = photo.clientWidth / photo.clientHeight,
        parentAspectRatio = photo.parentNode.clientWidth / photo.parentNode.clientHeight
        
  photo.style.setProperty('--ratio', parentAspectRatio)
  photo.classList[imageAspectRatio > parentAspectRatio ? 'add' : 'remove']('max')
}


</script>