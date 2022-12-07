<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>About Garcia's Panciteria</title>
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

<!--main starts here-->
<section class="heading">
    <p class="text-center">About Us</p>
    <div class="line"></div>
</section>

    <section class="about">
        <div class="d-flex flex-row mb-3">
        <div class="p-2 fs-1 fw-bolder">How did Garcia's Panciteria</br>start?</div>
        <div class="p-2 fs-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGarcia's Panciteria was established in 1998 after the family's mother lost her work in a panciteria as well. But one day, she begins to consider how she might support her family financially. She had prior experience working in that industry, so she reasoned why not open her own panciteria. Since the panciteria was just starting out, she had to be persistent in the face of rival businesses as well as the lack of public awareness of the eatery. Over time, the panciteria gained popularity, and many people came from far away to visit and buy her pancit.</div>
    </div>
    </section>

    <section class="about">
        <div class="d-flex flex-row-reverse">
        <div class="p-2 fs-1 fw-bolder text-end">Why choose us?</div>
        <div class="p-2 fs-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGarcia's Panciteria was established in 1998 after the family's mother lost her work in a panciteria as well. But one day, she begins to consider how she might support her family financially. She had prior experience working in that industry, so she reasoned why not open her own panciteria. Since the panciteria was just starting out, she had to be persistent in the face of rival businesses as well as the lack of public awareness of the eatery. Over time, the panciteria gained popularity, and many people came from far away to visit and buy her pancit.</div>
        </div>
    </section>

    <section class="about">
        <div class="d-flex flex-row mb-3">
        <div class="p-2 fs-1 fw-bolder">What we provide?</div>
        <div class="p-2 fs-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGarcia's Panciteria was established in 1998 after the family's mother lost her work in a panciteria as well. But one day, she begins to consider how she might support her family financially. She had prior experience working in that industry, so she reasoned why not open her own panciteria. Since the panciteria was just starting out, she had to be persistent in the face of rival businesses as well as the lack of public awareness of the eatery. Over time, the panciteria gained popularity, and many people came from far away to visit and buy her pancit.</div>
        </div>
    </section>
<!--main ends here-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>