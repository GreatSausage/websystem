<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <title>Homepage - Garcia's Panciteria</title>
</head>
<body>
<!--header-->
<?php include "header.php"; ?>

<!--main-->
<main>
<!--upperpart of homepage-->
<div class = "content">
    <h3>Welcome to <br>Garcia's Panciteria</h3>
    <div class="underline"></div>
        <p>The home of mouth watering pancit</p>
        <a href="menu.php" class="button">Order Now!</a>
</div>      
</main>

<?php include "footer.php"; ?>

</body>
</html>