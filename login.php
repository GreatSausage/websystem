<?php 
    @include 'config.php';
    session_start();
    if(isset($_POST["submit"])){
        $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $email = mysqli_real_escape_string($conn, $filter_email);
        $filter_pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        $pass = mysqli_real_escape_string($conn, md5($filter_pass));
     
        $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

        if(mysqli_num_rows($select_users) > 0){
      
            $row = mysqli_fetch_assoc($select_users);
      
            if($row['user_type'] == 'admin'){
               $_SESSION['admin_name'] = $row['name'];
               $_SESSION['admin_email'] = $row['email'];
               $_SESSION['admin_id'] = $row['id'];
               header('location:admin_page.php');
            }
            elseif($row['user_type'] == 'user'){
               $_SESSION['user_name'] = $row['name'];
               $_SESSION['user_email'] = $row['email'];
               $_SESSION['user_id'] = $row['id'];
               header('location:index.php');   
            }
            else{
                echo "<script> alert('No user found'); </script>";
            }
        }
        else{
            echo "<script> alert('Password do not match'); </script>";
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
                <a class="navbar-brand" href="login.php">
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
            <form class="" action="" method="post" autocomplete="off"> 
                <h2>Log In Form</h2> 
                <div class="inputBox"> 
                    <input type="text" name="email" id="email" required value=""> <span>Email</span> <i></i> 
                </div> 
                <div class="inputBox"> 
                    <input type="password" name="password" id="password" required value=""> <span>Password</span> <i></i> 
                </div> 
                <div class="links"> <a href="register.php">Don't have an account? Sign Up Now</a></div>  
                <button type="submit" name="submit" class="submit-btn">Sign In</button>
            </form> 
        </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>