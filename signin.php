<?php 
    require 'config.php';
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $result = mysqli_query($conn, "SELECT * FROM user_form WHERE username = '$username'");
        $row =(mysqli_fetch_assoc($result));
        if(mysqli_num_rows($result) > 0){
            if($password == $row["password"]){
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                header("Location: index.php ");
            }
            else{
                echo
                "<script> alert('Incorrect Username/Email or Password'); </script>";
            }
        }
            else{
                echo
                "<script> alert('User Not Registered'); </script>";
            }
        }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
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

    <!--form-->
    <div class="box"> 
        <form class="" action="" method="post" autocomplete="off"> 
            <h2>SIGN IN</h2> 
            <div class="inputBox"> 
                <input type="text" name="username" id="username" required value=""> <span>Username</span> <i></i> 
            </div> 
            <div class="inputBox"> 
                <input type="password" name="password" id="password" required value=""> <span>Password</span> <i></i> 
            </div> 
            <div class="links"> <a href="signup.php">Don't have an account? Sign Up Now</a> 
            </div> 
            <button type="submit" name="submit" class="submit-btn">Sign In</button>
        </form> 
    </div>

    <!--footer-->
</body>
</html>