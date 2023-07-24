<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/css/style.css">
    <title>Weeb Shop</title>
    <script src="https://kit.fontawesome.com/1db917ceaa.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- LOGIN DATABASE -->
<main>
<?php
    
    session_start();

    //connect to shop database, table: users
    $con = mysqli_connect("", "root", "", "weeb_shop");
    if(mysqli_connect_errno()){
        exit ('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    if(!isset($_POST['email'], $_POST['password'])){
        exit('Please fill both the email and password fields!');
    }

    //bind params, preparing SQL statements
    if($stmt = $con->prepare("SELECT id, _password FROM users WHERE _email = ?")){
        $stmt->bind_param('s', $_POST['email']);
        $stmt->execute();

        $stmt->store_result();

        if($stmt->num_rows > 0){
            $stmt->bind_result($id, $password);
            $stmt->fetch();

            //if account exists, verify password
            if($_POST['password'] === $password){
                //verification successful
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['id'] = $id;
                header('Location: shop.cnt.php');
            }else{
                //Incorrect password
                echo "<div class='error'>
                        <p class='error__message'>Oh oh... seems like the password was wrong</p>
                        <img src='../assets/images/error_input_var1.png' alt='incorrect login data image' height='512px' width='512px' class='error__image'>
                        <a href='../index.php'><span class='fa-solid fa-arrow-left-long'></span> back to login</a>
                    </div>";        
            }
        }else{
            //No matching email found
            echo "<div class='error'>
            <p class='error__message'>no account with this email found, sorry</p>
            <img src='../assets/images/error_input_var1.png' alt='incorrect login data image' height='512px' width='512px' class='error__image'>
            <a href='../index.php'><span class='fa-solid fa-arrow-left-long'></span> back to login</a>
        </div>";
        }

        $stmt->close();
    }

?>
</main>

</body>
</html>


