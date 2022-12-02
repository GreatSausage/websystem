<?php 
    require 'config.php';
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' OR email = '$email'");
        if(mysqli_num_rows($duplicate) > 0){
            echo "<script> alert('Username or Email has already taken');</script>";
        }
        if($password != $confirmpassword){
            echo "<script> alert('Password do not match'); </script>";
        }
        else{
            $query = "INSERT INTO users Values('','$username','$email','$password','')";
            mysqli_query($conn,$query);
            header("Location: login.php");
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
                <a class="navbar-brand" href="index.php">
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
                    <input type="text" name="username" id="username" required value=""> <span>Username</span> <i></i> 
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