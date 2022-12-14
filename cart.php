<?php
@include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];
    if(!isset($user_id)){
   header('location:login.php');
    };

    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$delete_id'") or die('query failed');
        header('location:cart.php');
    }

    if(isset($_GET['delete_all'])){
        mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
        header('location:cart.php');
    };

    if(isset($_POST['update_quantity'])){
        $cart_id = $_POST['cart_id'];
        $cart_quantity = $_POST['cart_quantity'];
        mysqli_query($conn, "UPDATE `cart` SET quantity = '$cart_quantity' WHERE id = '$cart_id'") or die('query failed');
        echo("<script>alert('Cart Updated')</script>");
        echo("<script>window.location = 'cart.php';</script>");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous"> 
    <link rel="stylesheet" href="cart.css?v=<?php echo time(); ?>">
    <title>Cart</title>
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
</header>

<!--main starts here-->
<div class="section-title">
    <h1>Garcia's Panciteria</h1>
    <h2>&mdash; Cart &mdash; </h2>
</div>
<section class="shopping-cart">
    <h1 class="title">products added</h1>
    <div class="box-container">
        <?php
            $grand_total = 0;
            $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
            if(mysqli_num_rows($select_cart) > 0){
                while($fetch_cart = mysqli_fetch_assoc($select_cart)){
        ?>
            <div  class="box">
                <a href="cart.php?delete=<?php echo $fetch_cart['id']; ?>" class="fas fa-times" onclick="return confirm('delete this from cart?');"></a>
                <img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" alt="" class="image">
                <h1><div class="name"><?php echo $fetch_cart['name']; ?></div></h1>
                <h5><div class="price">₱<?php echo $fetch_cart['price']; ?></div></h5>
                <form action="" method="post">
                    <input type="hidden" value="<?php echo $fetch_cart['id']; ?>" name="cart_id">
                    <input type="number" min="1" value="<?php echo $fetch_cart['quantity']; ?>" name="cart_quantity" class="qty">
                    <input type="submit" value="update" class="option-btn" name="update_quantity">
                    <div class="more-btn">
                    <a href="cart.php?delete_all" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled' ?>" onclick="return confirm('delete all from cart?');">delete all</a>
                    </div>
                </form>
                <p><div class="sub-total"> sub-total : <span>₱<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>.00</span> </div></p>
            </div>
        <?php
            $grand_total += $sub_total;
                }
            }
            else{
                echo '<p class="empty">your cart is empty</p>';
            }
        ?>
    </div><!--box-container-->
    <!--grandtotal-->
    <div class="cart-total">
        <p>grand total : <span>₱<?php echo $grand_total; ?>.00</span></p>
        <p><a href="checkout.php" class="btn <?php echo ($grand_total > 1)?'':'disabled' ?>">proceed to checkout</a></p>
        <p><a href="menu.php" class="option-btn">continue shopping</a></p>
    </div>
</section>
<!--main ends here-->

<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>