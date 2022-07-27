<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Login | Creative Trails</title>
    <div class="heading">
    <h1>THE CREATIVE TRAILS</h1>
    </div>
    <link rel="stylesheet" href="login.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300;400;500;600;700&display=swap" 
      rel="stylesheet"
    />
  </head>
  <body>
   
    <div class="login-box">
      <h1>Admin Login</h1>
      <form action="AdminLoginAction.php" method="post">
        <label>Email</label>
        <input type="email" placeholder="" name="txt_username"/>
        <label>Password</label>
        <input type="password" placeholder="" name="txt_password"/>
        <input type="submit" style="background-color: #ff523b;margin-top:2px" value="Submit" />
      </form>
    </div>
    <p class="para-2">
      Not have an account? <a href="signup.php">Sign Up Here</a>
    </p>
  
  </body>
</html>

