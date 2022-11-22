<?php require_once("includes/functions.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User sign in page</title>
    <link rel="stylesheet" href="css/auth-style.css">
</head>
<body>
    <div class="login-box">
        <h1>
            <?= login() ?>
        </h1>
        <form method="post">
            <label>Email</label>
            <input type="email" placeholder="" id="email" required name="email">
            <label>Password</label>
            <input type="password" placeholder="" id="password" required name="password">

            <span class="error-msg" id="errorMsg"></span>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
    <p class="para-2">Your don't have an account? <a href="user-registration.php">Sign up here</a></p>
</body>
<!-- <script src="js/signin-script.js"></script> -->
</html>