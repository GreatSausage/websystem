<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
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
    <link rel="stylesheet" href="order.css?v=<?php echo time(); ?>">
    <title>Order List</title>
</head>
<body>  

<header>
<!--Navbar-->
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">
        <img src="logo.png" alt="">&nbsp&nbspGarcia's Panciteria</a>
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
                <li class="nav-item">
                        <a class="nav-link" href="order.php" alt="">
                            <span class="icon">
                            <ion-icon name="receipt-outline"></ion-icon>
                        </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php" alt="">
                    <span class="icon">
                        <ion-icon name="cart-outline"></ion-icon>
                    </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" alt="">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span></a>
                </li>
            </ul>
        </div>
    </nav>
</div>       
</header>
    
<!--main-->
<!--main-->

<div class="container text-start">
    <div class="row">
        <?php
            $select_orders = mysqli_query($conn, "SELECT * FROM `orders` WHERE user_id = '$user_id'") or die('query failed');
            if(mysqli_num_rows($select_orders) > 0){
                while($fetch_orders = mysqli_fetch_assoc($select_orders)){
        ?>
        <div class="col bg-dark bg-opacity-75 rounded-end rounded-start border border-var(--font-color-2)">
            <p class="fw-semibold"> Placed on : <span class = "normal"><?php echo $fetch_orders['placed_on']; ?></span> </p>
            <p class="fw-semibold"> Name : <span class = "normal"><?php echo $_SESSION['user_name']; ?></span> </p>
            <p class="fw-semibold"> Number : <span class = "normal"><?php echo $fetch_orders['number']; ?></span> </p>
            <p class="fw-semibold"> Email : <span class = "email"><?php echo $_SESSION['user_email']; ?></span> </p>
            <p class="fw-semibold"> Address : <span class = "normal"><?php echo $fetch_orders['address']; ?></span> </p>
            <p class="fw-semibold"> Payment method : <span class = "normal"><?php echo $fetch_orders['method']; ?></span> </p>
            <p class="fw-semibold"> Your orders : <span class = "normal"><?php echo $fetch_orders['total_products']; ?></span> </p>
            <p class="fw-semibold"> Total price : <span class = "normal">₱<?php echo $fetch_orders['total_price']; ?>.00</span> </p>
            <p class="fw-semibold"> Payment status : <span style="color:<?php if($fetch_orders['payment_status'] == 'pending'){echo 'tomato'; }else{echo 'green';} ?>"><?php echo $fetch_orders['payment_status']; ?></span> </p>
        </div>
        <?php
            }
        }else{
            echo '<p class="empty">no orders placed yet!</p>';
        }
        ?>
    </div>
</div>

<!--footer-->
    <?php include "footer.php"; ?>
<!--footer ends-->

<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>