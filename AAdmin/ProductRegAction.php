<?php
include("config.php");
error_reporting(0);
 
$msg = "";
$EnterCategory=$_POST["Category_id"];
$EnterProductName=$_POST["ProductName"];
$EnterProductDetails=$_POST["Productdetails"];
$EnterProductPrice=$_POST["ProductPrice"];
$EnterProductRemarks=$_POST["ProductRemarks"];
$filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder = "./image/" . $filename;




$sql=mysqli_query($con,"SELECT  count(*) as count FROM productname WHERE Category_Name='$EnterCategoryName'");
$rowset=mysqli_fetch_array($sql);
//echo "insert into tbl_course(coursename,courseshortname,coursetype,course_criteria,seat_cappacity)values('$Entercoursename','$Entershortname','$Entercourstype','$EntercourseCriteria','$Enterseat')"
if($rowset['count']>0)
{

	echo"<script>alert('Product alraedy exist');window.location='viewcourse.php'</script>";
}
else
{	
$save=mysqli_query($con,"insert into productname(Category_id,ProductName,ProductsDetails,Price,Remarks,Image)values('$EnterCategory','$EnterProductName','$EnterProductDetails','$EnterProductPrice','$EnterProductRemarks','$filename')");
 
// echo "insert into category(Category_Name,remarks,Image)values('$EnterCategoryName','$EnterCategoryRemarks','$filename')";

mysqli_query($con, $sql);
if (move_uploaded_file($tempname, $folder)) {
    // echo "<h3>  Image uploaded successfully!</h3>";
} else {
    // echo "<h3>  Failed to upload image!</h3>";
   
    
}
echo "<script>alert('Product Registration Successfull!!!'); window.location='dashboard.html'</script>";

}


?>