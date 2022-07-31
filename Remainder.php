<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="Remainder.scss">


<br>
<br><br>
<a href="AddanEvent.php" class="">ADD an Event</a>

<br>
<br>
<br>

<?php
include('config.php');

session_start();


$user_id=$_SESSION["user_id"];;

$slno=1;
$result=mysqli_query($con,"select * from remainder where User_id='$user_id' ORDER BY date DESC");
while($row=mysqli_fetch_array($result))
{
    
    ?>




<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="widget widget-reminder">
                <div class="widget-reminder-header"><?php echo $row['date'] ?></div>
                <div class="widget-reminder-container">
                    <div class="widget-reminder-time">
                
                    <?php echo $row['Time'] ?>
                    </div>
                    <div class="widget-reminder-divider bg-success"></div>
                    <div class="widget-reminder-content">
                        <h4 class="widget-title"><?php echo $row['EventName'] ?></h4>
                        <div class="widget-desc"><i class="fa fa-map-pin"></i> <?php echo $row['Description'] ?></div>
                    </div>
                </div>
                

                
               <?php
               
}
               ?>
        
        
    </div>
</div>