<?php
include("config.php");
error_reporting(0);
 
$msg = "";
$EnterCAtgory_id=$_POST['Category_id'];
$EnterCategoryName=$_POST["CategoryName"];
$EnterCategoryRemarks=$_POST["categoryRemarks"];
$filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder = "./image/" . $filename;




$sql=mysqli_query($con,"SELECT  count(*) as count FROM category WHERE Category_Name='$EnterCategoryName'");
$rowset=mysqli_fetch_array($sql);
//echo "insert into tbl_course(coursename,courseshortname,coursetype,course_criteria,seat_cappacity)values('$Entercoursename','$Entershortname','$Entercourstype','$EntercourseCriteria','$Enterseat')"
if($rowset['count']>0)
{

	echo"<script>alert('Product alraedy exist');window.location='viewcourse.php'</script>";
}
else
{	
$save=mysqli_query($con,"update category set Category_Name='$EnterCategoryName',remarks='$EnterCategoryRemarks',Image='$filename' where Cat_id='$EnterCAtgory_id'");

// echo "update category set Category_Name='$EnterCategoryName',remarks='$EnterCategoryRemarks',Image='$filename' where Cat_id='$EnterCAtgory_id')";

// echo "insert into category(Category_Name,remarks,Image)values('$EnterCategoryName','$EnterCategoryRemarks','$filename')";

mysqli_query($con, $sql);
if (move_uploaded_file($tempname, $folder)) {
    // echo "<script>alert('Image Uploades Successfully!!!')</script>";
} else {
    // echo "<h3>  Failed to upload image!</h3>";
    
    
}
echo "<script>alert('Category Registration Successfull!!!'); window.location='dashboard.html'</script>";

}


?>