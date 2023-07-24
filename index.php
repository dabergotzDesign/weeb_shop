<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Weeb Shop</title>
    <script src="https://kit.fontawesome.com/1db917ceaa.js" crossorigin="anonymous"></script>
    <script src="./js/login.js" defer></script>
</head>
<body>
    <header class="header">
        <?php include "./content/navigation.cnt.php"; ?>
    </header>
    <main class="shop">
        <div class="welcome" style="height: 40px"></div>

    <?php include "./templates/products.tpl.php" ?>

    <?php include "./templates/loginForm.tmpl.php" ?> <!-- disabled until login process -->

</main>
<!--
<div class="images_container">
    <img src="./assets/images/book_hearts.png" alt="" height="256px" width="256px" class="image__bottom-left">
    <img src="./assets/images/book_read_var1.png" alt="" height="256px" width="256px"  class="image__bottom-center">
</div>
-->
    <footer>
        <?php include "./content/footer.cnt.php" ?>        
    </footer>
</body>
</html>