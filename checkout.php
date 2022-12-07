<?php
@include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];
    if(!isset($user_id)){
        header('location:login.php');
    };

    if(isset($_POST['order'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $number = mysqli_real_escape_string($conn, $_POST['number']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $method = mysqli_real_escape_string($conn, $_POST['method']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $placed_on = date('d-M-Y');

        $cart_total = 0;
        $cart_products[] = '';

        $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');

    if(mysqli_num_rows($cart_query) > 0){
        while($cart_item = mysqli_fetch_assoc($cart_query)){
            $cart_products[] = $cart_item['name'].' ('.$cart_item['quantity'].') ';
            $sub_total = ($cart_item['price'] * $cart_item['quantity']);
            $cart_total += $sub_total;
        }
    }

    $total_products = implode(', ',$cart_products);
    $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE name = '$name' AND number = '$number' AND email = '$email' AND method = '$method' AND address = '$address' AND total_products = '$total_products' AND total_price = '$cart_total'") or die('query failed');

    if($cart_total == 0){
        $message[] = 'your cart is empty!';
    }
    elseif(mysqli_num_rows($order_query) > 0){
        $message[] = 'order placed already!';
    }
    else{
        mysqli_query($conn, "INSERT INTO `orders`(user_id, name, number, email, method, address, total_products, total_price, placed_on) VALUES('$user_id', '$name', '$number', '$email', '$method', '$address', '$total_products', '$cart_total', '$placed_on')") or die('query failed');
        mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
        $message[] = 'order placed successfully!';
        header('location:menu.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Garcia's Panciteria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="checkout.css?v=<?php echo time(); ?>">
</head>
<body>
<!--header-->
<header>
    <!--Navbar-->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.php">
            <img src="../Admin/assets/imgs/logo.png" alt="">&nbsp&nbspGarcia's Panciteria</a>
    </div>
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
</header>

<!--main-->
<div class="box">
    <form class="" action="" method="POST" autocomplete="off">
        <h2>Place your order</h2>
        <div class="underline"></div>
        <div class="inputBox"> 
            <input type="text" name="name" id="name" required value=""> <span>Full Name</span> <i></i> 
        </div> 
        <div class="inputBox"> 
            <input type="text" name="email" id="email" required value=""> <span>Email Address</span> <i></i> 
        </div>
        <div class="inputBox"> 
            <input type="text" name="address" id="address" required value=""> <span>Address</span> <i></i> 
        </div> 
        <div class="inputBox"> 
            <input type="text" name="number" id="number" required value=""> <span>Phone Number</span> <i></i> 
        </div>
        <div class="inputBox">
            <select name="method">
                <option value="Cash on delivery">Cash on delivery</option>
                <option value="Gcash">Gcash</option>
            </select>
        </div>
        <button type="submit" name="order" class='submit-btn'>Order Now</button>
    </form>
</div>
<!--main ends here-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>