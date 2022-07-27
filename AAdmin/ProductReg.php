<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Bootstrap Sign up Form with Icons</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
	body {
		color: #fff;
		background: #19aa8d;
		font-family: 'Roboto', sans-serif;
	}
	.form-control, .form-control:focus, .input-group-addon {
		border-color: #e1e1e1;
	}
    .form-control, .btn {        
        border-radius: 3px;
    }
	.signup-form {
		width: 390px;
		margin: 0 auto;
		padding: 30px 0;
	}
    .signup-form form {
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
	.signup-form .form-control {
		min-height: 38px;
		box-shadow: none !important;
	}	
	.signup-form .input-group-addon {
		max-width: 42px;
		text-align: center;
	}
	.signup-form input[type="checkbox"] {
		margin-top: 2px;
	}   
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #19aa8d;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
		background: #179b81;
        outline: none;
	}
	.signup-form a {
		color: #fff;	
		text-decoration: underline;
	}
	.signup-form a:hover {
		text-decoration: none;
	}
	.signup-form form a {
		color: #19aa8d;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	}
	.signup-form .fa {
		font-size: 21px;
	}
	.signup-form .fa-paper-plane {
		font-size: 18px;
	}
	.signup-form .fa-check {
		color: #fff;
		left: 17px;
		top: 18px;
		font-size: 7px;
		position: absolute;
	}
</style>
</head>
<body>
  
<div class="signup-form">
    <form action="ProductRegAction.php" method="post" enctype="multipart/form-data">
		<h2>Product Registration</h2>
		<p>Please fill in this form to Register Product!</p>
		<hr>

    <div class="form-group">
			<div class="input-group">
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
    </select>
</div>
</div>


        <div class="form-group">
			<div class="input-group">
      <label >Enter product Name</label>

        <input type="text" class="form-control" name="ProductName" style="width:100%;" placeholder="Enter Product name">			</div>
        </div>
        <div class="form-group">
        <div class="row">
    <div >
        
      </div class="form-group">
      <label for="">Enter product deatils</label>
      <div class="input-group">
      <textarea rows="8" cols="47" name="Productdetails" placeholder="Enter product deatils">  </textarea>
           
      </div>
</div>
</div>  

      <div class="form-group">
			<div class="input-group">
      <label >Enter product Price</label>

        <input type="number" class="form-control" name="ProductPrice" style="width:100%" >			</div>
        </div>

        <div class="form-group">
        <div class="row">
    <div >
        
      </div class="form-group">
      <label for="">Enter product Remarks</label>
      <div class="input-group">
      <textarea rows="8" cols="47" name="ProductRemarks" >  </textarea>
           
      </div>
</div>
</div>



<div class="form-group">
			<div class="input-group">
      <label >Select file</label>

        <input type="file" class="form-control" name="uploadfile" style="width:100%;">			</div>
        </div>





		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    </form>
</div>
</body>
</html>