<!-- check if logged in -->
<?php 
        session_start();

        if(!isset($_SESSION['loggedin'])){
            header('Location: index.php');
            exit;
        }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/css/style.css">
    <script src="https://kit.fontawesome.com/1db917ceaa.js" crossorigin="anonymous"></script>
    <script src="../js/cart.js" defer></script>
    <title>Weeb Shop</title>
</head>
<body>
    <header class="header">
        <?php include "./nav_loggedIn.cnt.php" ?>
    </header>
    <main class="shop">
        <div class="welcome">
            <h4>Welcome back, <?= $_SESSION['email']?></h4>
        </div>
        <?php include "../templates/products_login.tpl.php" ?>

        <div class="cart">
            <div class="cart__counter">0</div>
            <i class="fa-solid fa-cart-shopping"></i>
        </div>

        <!-- Sidebar -->
        <?php include "../content/sidebar.cnt.php"?>

    </main>
    <footer>
        <?php include "footer.cnt.php" ?>
    </footer>
    
</body>
</html>