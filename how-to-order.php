<?php
session_start();
$isLoggedIn = isset($_SESSION["users"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Order | DOLLARSIGN</title>
    <link rel="stylesheet" href="main.css">
    <script src="clothingData.js"></script>
    <script defer src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <?php include("navbar.php"); ?>

<!-- How to Order -->
<div class="how-to-order-title">
    <h1>HOW TO ORDER</h1>
</div>

<div class="how-to-order-content">
    <h3>INSTRUCTIONS:</h3>
    <p>- Go to <b>SHOP</b> section to browse all the products available at our online shop.</p>
    <p>- <b>ADD TO CART</b> the product/s that you wish to buy.</p>
    <p>- If you are satisfied with your order/s and wish to check out, just click the shopping bag icon and proceed to <b>CHECKOUT</b>.</p>
    <p>- Input your email address and the necessary information needed on the <b>SHIPPING ADDRESS</b> section.</p>
    <p>- Proceed to <b>CONTINUE TO SHIPPING</b>.</p>
    <p>- For the payment, you can pay using your GCASH.</p>
    <p>- Click <b>COMPLETE ORDER</b> once you choose your mode of payment.</p>
    <p>- Please take note of your order number.</p>
    <p>- You will receive updates regarding your order/s through email.</p>
    <p>If you have more questions and concerns, please don't hesitate to contact our DOLLARSIGN customer service. You may reach our customer service by sending us an email at dollarsign.clothing@gmail.com</a>.</p>
</div>

<style>
    .how-to-order-title {
        font-family: 'Nutty Noises';
        font-size: 50px;
        text-align: center;
    }

    .how-to-order-title h1 {
        margin: 100px 0px 50px;
    }

    .how-to-order-title h3 {
        font-family: Arial, sans-serif;
        font-size: 14px;
        color: black;
    }

    .how-to-order-content {
        font-family: Arial, sans-serif;
        font-size: 14px;
        line-height: 2;
        letter-spacing: 1px;
        color: black;
        background-color: rgb(216, 216, 216);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        padding: 30px;
        border-radius: 3px;
        max-width: 700px;
        margin: 0 auto;
        text-align: left;
    }

    .how-to-order-content a {
        color: #000;
        text-decoration: underline;
    }
</style>

<?php include("footer.php"); ?>

</body>
</html>
