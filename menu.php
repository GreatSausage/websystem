<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="menu.css?v=<?php echo time(); ?>">
</head>
<body>  
    <!--header-->
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
                    <!--
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    -->
                </ul>
            </div>       
    </header>

    <!--main-->
    <main>
        <div class="section-title">
            <h1>Garcia's Panciteria</h1>
            <h3>&mdash; Menu Page &mdash;</h3>
        </div><!--section-title-->
        <div class="menu">
            <div class="menu-column"><!--FIRST COLUMN STARTS-->
                <h4>Small size</h4>
                <div class="single-menu"><!--SMALL BIHON-->
                    <img src="smallbihon.jpg" alt="">
                    <div class="content-menu">
                        <h5>Bihon</h5>
                        <h6><span>P300 / P400</span></h6>
                        <p>5 to 6 person</p>
                        <a href="checkout.php" class="button">Order Now!</a>
                    </div><!--content-menu-->
                </div><!--single-menu-->
                <div class="single-menu"><!--SMALL CANTON-->
                    <img src="smallcanton.jpg" alt="">
                    <div class="content-menu">
                        <h5>Canton</h5>
                        <h6><span>P300 / P400</span></h6>
                        <p>5 to 6 person</p>
                        <a href="checkout.php" class="button">Order Now!</a>
                    </div><!--CONTENT-MENU-->
                </div><!--SINGLE-MENU-->
                <div class="single-menu"><!--SMALL MIKI-->
                    <img src="largebihon.jpg" alt=""><!--NO PICTURE FOR SMALL MIKI YET-->
                    <div class="content-menu">
                        <h5>Miki</h5>
                        <h6><span>P300 / P400</span></h6>
                        <p>5 to 6 person</p>
                        <a href="checkout.php" class="button">Order Now!</a>
                    </div><!--CONTENT-MENU-->
                </div><!--SINGLE-MENU-->
                </div><!--FIRST COLUMN ENDS-->

            <div class="menu-column"><!--SECOND COLUMN STARTS-->
                <h4>medium size</h4>
                <div class="single-menu"><!--MEDIUM BIHON-->
                    <img src="mediumbihon.jpg" alt="">
                    <div class="content-menu">
                        <h5>Bihon</h5>
                        <h6><span>P500 / P600</span></h6>
                        <p>10 to 12 person</p>
                        <a href="checkout.php" class="button">Order Now!</a>
                    </div><!--CONTENT-MENU-->
                </div><!--SINGLE-MENU-->
                <div class="single-menu"><!--MEDIUM CANTON-->
                    <img src="mediumcanton.jpg" alt="">
                    <div class="content-menu">
                        <h5>Canton</h5>
                        <h6><span>P500 / P600</span></h6>
                        <p>10 to 12 person</p>>
                        <a href="checkout.php" class="button">Order Now!</a>
                    </div><!--CONTENT-MENU-->
                </div><!--SINGLE-MENU-->
                <div class="single-menu"><!--MEDIUM MIKI-->
                    <img src="largebihon.jpg" alt=""><!--NO PICTURE FOR MEDIUM MIKI YET-->
                    <div class="content-menu">
                        <h5>miki</h5>
                        <h6><span>P500 / P600</span></h6>
                        <p>10 to 12 person</p>
                        <a href="checkout.php" class="button">Order Now!</a>
                    </div><!--CONTENT-MENU-->
                </div><!--SINGLE-MENU-->
            </div><!--SECOND MENU COLUMN-->

            <div class="menu-column">
                <h4>large size</h4>
                <div class="single-menu"><!--LARGE BIHON-->
                    <img src="largebihon.jpg" alt="">
                    <div class="content-menu">
                        <h5>Bihon</h5>
                        <h6><span>P700 / P800</span></h6>
                        <p>13 to 15 person</p>
                        <a href="checkout.php" class="button">Order Now!</a>
                    </div><!--CONTENT-MENU-->
                </div><!--SINGLE-MENU-->
                <div class="single-menu"><!--LARGE CANTON-->
                    <img src="largecanton.jpg" alt="">
                    <div class="content-menu">
                        <h5>Canton</h5>
                        <h6><span>P700 / P800</span></h6>
                        <p>13 to 15 person</p>
                        <a href="checkout.php" class="button">Order Now!</a>
                    </div><!--CONTENT-MENU-->
                </div><!--SINGLE-MENU-->
                <div class="single-menu"><!--LARGE MIKI-->
                    <img src="mediumbihon.jpg" alt=""><!--NO PICTURE FOR LARGE MIKI YET-->
                    <div class="content-menu">
                        <h5>miki</h5>
                        <h6><span>P700 / P800</span></h6>
                        <p>13 to 15 person</p>
                        <a href="checkout.php" class="button">Order Now!</a>
                    </div><!--CONTENT-MENU-->
                </div><!--SINGLE-MENU-->
            </div><!--THIRD MENU COLUMN-->
        </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>