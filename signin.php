<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css?v=<?php echo time(); ?>">
    <title>Sign In - Garcia's Panciteria</title>
</head>
<body>
    <!--header-->
    <?php include "header.php"; ?>

    <!--main-->
    <div class="content">
        <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspWelcome to <br>Garcia's Panciteria!</h3>
    </div>
    <!--form-->
    <div class="box"> 
        <form autocomplete="off"> 
            <h2>SIGN IN</h2> 
            <div class="inputBox"> 
                <input type="text" name="username"required> <span>Username</span> <i></i> 
            </div> 
            <div class="inputBox"> 
                <input type="password" name="password" required> <span>Password</span> <i></i> 
            </div> 
            <div class="links"> <a href="signup.php">Don't have an account? Sign Up Now</a> 
            </div> 
            <input type="submit" value="Login"> 
        </form> 
    </div>

    <!--footer-->
</body>
</html>