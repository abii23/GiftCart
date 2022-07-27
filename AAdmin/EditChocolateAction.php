<?php
include("config.php");
error_reporting(0);
 
$msg = "";
$Chocolate=$_POST["Chocolate_id"];
$EnterProductName=$_POST["ChocolateName"];
$EnterProductPrice=$_POST["ProductPrice"];
$EnterProductRemarks=$_POST["ProductRemarks"];
$filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder = "./image/" . $filename;

echo $filename;
echo $tempname;


$sql=mysqli_query($con,"SELECT  count(*) as count FROM chocolate WHERE Chocolate_Name='$EnterProductName'");
$rowset=mysqli_fetch_array($sql);
//echo "insert into tbl_course(coursename,courseshortname,coursetype,course_criteria,seat_cappacity)values('$Entercoursename','$Entershortname','$Entercourstype','$EntercourseCriteria','$Enterseat')"
if($rowset['count']>0)
{

	echo"<script>alert('Product alraedy exist');window.location='dashboard.html'</script>";
}
else
{	
$save=mysqli_query($con,"update chocolate set Chocolate_Name='$EnterProductName',Price='$EnterProductPrice',Remarks='$EnterProductRemarks',Image='$filename' where id='$Chocolate'");
//  echo "update chocolate set Chocolate_Name='$EnterProductName',Price='$EnterProductPrice',Remarks='$EnterProductRemarks',Image='$filename' where id='$Chocolate'";
mysqli_query($con, $sql);
if (move_uploaded_file($tempname, $folder)) {
    // echo "<h3>  Image uploaded successfully!</h3>";
} else {
    // echo "<h3>  Failed to upload image!</h3>";
   
    
}
echo "<script>alert('Updated Successfull!!!'); window.location='dashboard.html'</script>";

}


?>