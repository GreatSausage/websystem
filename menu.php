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
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
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
            <div class="menu-column">
                <h4>Small</h4>
                <div class="single-menu">
                    <img src="smallbihon.jpg" alt="">
                    <div class="content-menu">
                        <h5>Bihon</h5>
                        <h6><span>P300 / P400</span></h6>
                        <p>5 to 6 person</p>
                        <a href="#" class="button">Order Now!</a>
                    </div><!--content-menu-->
                </div><!--single-menu-->
                <div class="single-menu">
                    <img src="mediumbihon.jpg" alt="">
                    <div class="content-menu">
                        <h5>Bihon</h5>
                        <h6><span>P300 / P400</span></h6>
                        <p>5 to 6 person</p>
                        <a href="#" class="button">Order Now!</a>
                    </div><!--content-menu-->
                </div><!--single-menu-->
            </div><!--first menu column-->
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>