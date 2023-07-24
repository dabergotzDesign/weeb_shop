<!-- FORM Function -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/css/style.css">
    <script src="https://kit.fontawesome.com/1db917ceaa.js" crossorigin="anonymous"></script>
    <script src="../js/order.js" defer></script>
    <title>Weeb Shop Checkout</title>
</head>
<body>
    <header class="header">
        <?php include "./nav_loggedIn.cnt.php" ?>
    </header>
    <main>

        <?php if(!isset($_POST['submit'])) { 
               
            ?>

        <!-- CHECKOUT FORM -->
        <div class="checkout">
            <form action="checkout_form.php" method="post" class="checkout__form">
                <div class="checkout__info-container">
                    <div class="checkout__user-info">
                        <h3>User Information</h3>
                        <input type="text" name="full_name" id="full_name" placeholder="FULL NAME">
                        <div class="checkout__birthdate-container">
                            <label>Birth Date</label>
                            <div class="checkout__birthdate-input">
                                <input type="number" min='1950' id="birth_year" placeholder="YEAR">
                                <select name="birth-month">
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="Dezember">Dezember</option>
                                </select>
                                <input type="number" min="0" max="31" id="birth_day" placeholder="DAY">
                            </div>
                        </div>
                    </div>

                    <div class="checkout__contact-container">
                        <div class="checkout__contact">
                            <h3>Contact</h3>
                            <div class="checkout__address">
                                <input type="text" name="city" id="city" placeholder="CITY">
                                <input type="text" name="street" id="street" placeholder="STREET & NUMBER">
                            </div>
                            <div class="checkout__address-further">
                                <input type="text" name="post-code" id="post-code" placeholder="POST CODE">
                                <input type="text" name="country" id="country" placeholder="COUNTRY">
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="checkout__payment-container">
                    <h3>Payment Method</h3>
                    <div class="checkout__payment-method">
                            <div class="payment-radio">
                                <input type="radio" name="pay_radio" id="pay_radio_card" checked="checked" value="Credit Card"><span>Credit Card (VISA, American Express, etc.)</span>
                            </div>
                            <div class="payment-radio">
                            <input type="radio" name="pay_radio" id="pay_radio_pp" value="PayPal"><span>PayPal</span>
                            </div>
                            <div class="payment-radio">
                            <input type="radio" name="pay_radio" id="pay_radio_bank" value="Bank Transfer"><span>Bank Transfer</span>
                            </div>
                    </div>

                    <h3>Shipping Method</h3>
                    <div class="checkout__shipping-method">
                    <div class="shipping-radio">
                        <input type="radio" name="ship_radio" id="ship_dhl" value="DHL" checked="checked"><span>DHL</span>
                    </div>
                    <div class="shipping-radio">                    
                        <input type="radio" name="ship_radio" id="ship_ups" value="UPS"><span>UPS</span>
                    </div>
                    <div class="shipping-radio">
                        <input type="radio" name="ship_radio" id="ship_fedex" value="FedEx"><span>FedEx</span>
                    </div>
                    <div class="shipping-radio">
                        <input type="radio" name="ship_radio" id="ship_pickup" value="Direct Pick Up"><span>Direct Pick Up</span>
                    </div>
                    </div>
                </div>

                <div class="checkout__controls">
                    <!-- <input type="button" id="cancel-btn" value="cancel order"> -->
                    <a href="./shop.cnt.php" id="cancel-btn">Cancel Order</a>
                    <input type="submit" id="order-btn" name="submit" value="complete order">
                </div>
            </form>
        </div>
        <?php } else{?>

        <!-- ORDERED PRODUCT SCREEN OVERLAY -->
        <div class="order">
        <div class="order__message">success! Thank you for your order </div>

            <div class="order__product-list">
                <ul class="order-list-items">

                    <!-- List of ordered products -->
                    
                </ul>
                <hr>
                <div class="order__total">
                    Total: <span class="order__price">0,00$</span>
                </div>
            </div>

            <div class="order__shipping">
                <h3>your order will be delivered to: </h3>
                <div class="order__form-info">
                    <div class="order__name"><?php echo $_POST['full_name'] ?></div>
                    <div class="order__address">
                        <div class="order__street">
                            <?php echo $_POST['post-code'] ?>, <?php $_POST['street'] ?>
                        </div>
                        <div class="order__country">
                            <?php echo $_POST['city'] ?> <span> <?php echo $_POST['country'] ?> </span>
                        </div>
                    </div>
                </div>
                <div class="order__pay-and-ship">
                    <p>
                        Payment Method: <span>  <?php echo $_POST['pay_radio'] ?> </span>
                    </p>
                    <p>
                        Shipping Method: <span> <?php echo  $_POST['ship_radio'] ?> </span>
                    </p>
                </div>
            </div>
            <a href="./shop.cnt.php" class="order__return">back to shop <i class="fa-solid fa-chevron-right"></i></a>
        </div>
        <?php } ?>

    </main>
    <footer>
        <?php include "./footer.cnt.php" ?>
    </footer>

    <script>
        let bYear = document.getElementById("birth_year");
        let bDay = document.getElementById("birth_day");

        if(bYear.value < 1950){
            bYear.value = 1950;
        }

        if(bDay.value >= 32){
            bDay.value = 31;
        }
        if(bDay.value <= 0){
            bDay.value = 1;
        }

    </script>
</body>
</html>                    