<?php require_once("includes/functions.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CUSTOMER REGISTRATION</title>
        <link rel="stylesheet" href="css/auth-style.css">
    </head>
    <body>
     <div class="signup-box">
          <h1>
            <?= registerUser() ?>
          </h1>
        
         <form method="post">
            <label>First name</label>
            <input type="text" placeholder="" id="firstName" required name="firstName">
            <label> Last name</label>
            <input type="text" placeholder="" id="lastName" required name="lastName">
            <label>Email</label>
            <input type="email" placeholder="" id="email" required name="email">
            <label>Number</label>
            <input type="number" placeholder="" id="Number" required name="number">
            <label>Password</label>
            <input type="password" placeholder="" id="password" required name="password">

            <span class="error-msg" id="errorMsg"></span>
            <button type="submit" name="submit">Submit</button>
         </form>
          <p>By clicking the sign up button, you agree to our</br>
            <a href="#">Terms and Condition</a> and <a href="#">policy privacy</a>
          </p>
     </div>
     <p class="para-2">Already have an account <a href="login.php">Login here</a></p>
    </body>
    <!-- <script src="js/signup-script.js"></script> -->
</html> 