<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up | Creative Trails</title>
    <link rel="stylesheet" href="login.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300;400;500;600;700&display=swap" 
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="signup-box">
      <h1>Sign Up</h1>
      <h4>It's free and only takes a minute</h4>
      <form action="SignupAction.php" method="POST">
        <label>First Name</label>
        <input type="text" placeholder="" name="txt_FirstName" />
        <label>Last Name</label>
        <input type="text" placeholder="" name="txt_LastName"/>
        <label>Email</label>
        <input type="email" placeholder=""name="txt_Email" />
        <label>Password</label>
        <input type="password" placeholder="" name="txt_Password"/>
        <label>Confirm Password</label>
        <input type="password" placeholder=""name="txt_Confirmpassword" />
        <input type="submit" style="background-color: #ff523b;margin-top:2px" value="Submit" name="Submit"/>
      </form>
      <p>
        By clicking the Sign Up button,you agree to our <br />
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
      </p>
    </div>
    <p class="para-2">
      Already have an account? <a href="login.php">Login here</a>
    </p>
  </body>
</html>