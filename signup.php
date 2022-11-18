<?php
    include 'config.php';

    if(isset($_POST["submit"])){
        $username = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = md5($_POST['pass']);
        $confirmpassword = md5($_POST['confirmpassword']);
        
        $select = "SELECT * FROM user_db WHERE email='$email' && pass='pass'";

        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){
            echo "<script> alert ('Email has already taken');</script>";
        }
        else{
            if($password != $confirmpassword){
                $insert = "INSERT INTO user_db(username, email, pass) VALUES('$username','$email','$password')";
                mysqli_query($conn,$insert);
                echo "<script>alert('Signed Up Successfully');</script>";
                header('location:signin.php');
            }
            else{
                echo "<script>alert('Password does not match');</script>";
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css?v=<?php echo time(); ?>">
    <title>Sign Up - Garcia's Panciteria</title>
</head>
<body>

    <!--header-->
    <?php include "header.php"; ?>

    <!--main-->
    <div class="content">
            <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspWelcome to <br>Garcia's Panciteria!</h3>
        </div>
        <div class="box"> 
            <form action="signin.php" method="POST" autocomplete="off"> 
                <h2>SIGN UP</h2> 
                <div class="inputBox"> 
                    <input type="text" name="username" required> <span>Username</span> <i></i> 
                </div> 
                <div class="inputBox"> 
                    <input type="text" name="email" required> <span>Email</span> <i></i> 
                </div>
                <div class="inputBox"> 
                    <input type="password" name="pass" required> <span>Password</span> <i></i> 
                </div>
                <div class="inputBox"> 
                    <input type="password" name="confirmpassword" required> <span>Confirm Password</span> <i></i> 
                </div>
                
                <input type="submit" value="Sign Up">
            </form> 
        </div>

    <!--footer-->
    
</body>
</html>