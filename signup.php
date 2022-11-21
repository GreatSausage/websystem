<?php 
    require 'config.php';
    
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $duplicate = mysqli_query($conn, "SELECT * FROM user_db WHERE email = '$email'");
        if(mysqli_num_rows($duplicate) > 0){
            echo
            "<script> alert('Username or Email Has Already Taken');</script>";
        }
        else{
            if($password = $confirmpassword){
                $query = "INSERT INTO user_form Values('','$name','$email','$password')";
                mysqli_query($conn,$query);
                echo "<script> alert('Registration Successfully'); </script>";
            }
            else{
                echo "<script> alert('Password Does Not Match'); </script>";
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
        </div>
        <div class="box"> 
            <form action="signin.php" method="POST" autocomplete="off"> 
                <h2>SIGN UP</h2> 
                <div class="inputBox"> 
                    <input type="text" name="name" id="name" required> <span>Username</span> <i></i> 
                </div> 
                <div class="inputBox"> 
                    <input type="text" name="email" id="email" required> <span>Email</span> <i></i> 
                </div>
                <div class="inputBox"> 
                    <input type="password" name="password" id="password" required> <span>Password</span> <i></i> 
                </div>
                <div class="inputBox"> 
                    <input type="password" name="confirmpassword" id="confirmpassword" required> <span>Confirm Password</span> <i></i> 
                </div>
                
                <input type="submit" value="Sign Up">
            </form> 
        </div>

    <!--footer-->
    
</body>
</html>