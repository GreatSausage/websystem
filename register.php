<?php 
    require 'config.php';
    if(isset($_POST["submit"])){
    $filter_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $name = mysqli_real_escape_string($conn, $filter_name);
    $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $email = mysqli_real_escape_string($conn, $filter_email);
    $filter_pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
    $pass = mysqli_real_escape_string($conn, md5($filter_pass));
    $filter_cpass = filter_var($_POST['cpass'], FILTER_SANITIZE_STRING);
    $cpass = mysqli_real_escape_string($conn, md5($filter_cpass));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die('query failed');
   $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE name = '$name' OR email = '$email'");
        if(mysqli_num_rows($duplicate) > 0){
            echo "<script> alert('Username or Email has already taken');</script>";
        }
        if($pass != $cpass){
            echo "<script> alert('Password do not match'); </script>";
        }
        else{
            $query = "INSERT INTO user_form Values('','$name','$email','$pass')";
            mysqli_query($conn, "INSERT INTO `users`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
            header('location:login.php');
        }            
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="register.css?v=<?php echo time(); ?>">
</head>
<body>
    <header>
        <!--Navbar-->
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="register.php">
                <img src="../Ester_Pansitan/logo.png" alt="">&nbsp&nbspGarcia's Panciteria</a>
        <!--hamburger-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
    </header>

    <main>
    <!--form-->
        <div class="box"> 
            <form class="" action="" method="POST" autocomplete="off"> 
                <h2>Register Form</h2> 
                <div class="inputBox"> 
                    <input type="text" name="name" id="username" required value=""> <span>Username</span> <i></i> 
                </div> 
                <div class="inputBox"> 
                    <input type="text" name="email" id="email" required value=""> <span>Email</span> <i></i> 
                </div>
                <div class="inputBox"> 
                    <input type="password" name="password" id="password" required value=""> <span>Password</span> <i></i> 
                </div>
                <div class="inputBox"> 
                    <input type="password" name="confirmpassword" id="confirmpassword" required value=""> <span>Confirm Password</span> <i></i><br> 
                </div>
                <div class="links"> <a href="login.php">Already have an account? Sign In Now</a> 
            </div>   
                <button type="submit" name="submit" class='submit-btn'>Sign Up</button>
            </form> 
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>