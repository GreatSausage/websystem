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
                echo "<script> alert('Incorrect Username/Email or Password'); </script>";
            }
        }
            else{
                echo "<script> alert('User Not Registered'); </script>";
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
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
    <title>Log In - Garcia's Panciteria </title>
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
                    
    <!--menulist-->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a href="menu.php" class="nav-link">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
            </ul>
        </div>       
    </header>

    <main>
    <!--form-->
    <div class="box"> 
        <form class="" action="" method="post" autocomplete="off"> 
            <h2>Log In Form</h2> 
            <div class="inputBox"> 
                <input type="text" name="username" id="username" required value=""> <span>Username</span> <i></i> 
            </div> 
            <div class="inputBox"> 
                <input type="password" name="password" id="password" required value=""> <span>Password</span> <i></i> 
            </div> 
            <div class="links"> <a href="register.php">Don't have an account? Sign Up Now</a> 
            </div> 
            <button type="submit" name="submit" class="submit-btn">Sign In</button>
        </form> 
    </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>