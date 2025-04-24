<?php
session_start();
$isLoggedIn = isset($_SESSION["users"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Conditions | DOLLARSIGN</title>
    <link rel="stylesheet" href="main.css">
    <script defer src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <?php include("navbar.php"); ?>

    <!-- Terms & Conditions Section -->
    <h2 class="terms-conditions-title" >TERMS AND CONDITIONS</h2>
    <div class="terms-section">

        <div class="terms-item">
            <h3>General Information</h3>
            <p>Welcome to Dollar Sign Clothing! By accessing or using our website, you agree to comply with these Terms and Conditions. If you do not agree, please do not use this website.</p>
        </div>

        <div class="terms-item">
            <h3>Product Information</h3>
            <p>All products listed on the website are subject to availability. We strive to ensure that descriptions and images of products are accurate, but they may vary slightly.</p>
        </div>

        <div class="terms-item">
            <h3>Account Registration</h3>
            <p>To place an order, you may be required to create an account. You agree to provide accurate, current, and complete information. You are responsible for the confidentiality of your account and password.</p>
        </div>

        <div class="terms-item">
            <h3>Ordering and Payment</h3>
            <p>By placing an order, you are offering to buy the products at the listed price. Payment must be completed before processing. We accept Paymaya, G-cash, and Credit Card.</p>
        </div>

        <div class="terms-item">
            <h3>Returns and Exchanges</h3>
            <p>We accept returns and exchanges within [insert time period, e.g., 30 days] of receipt. Items must be unworn, unwashed, and in original condition. Some items may be excluded from returns.</p>
        </div>

        <div class="terms-item">
            <h3>Intellectual Property</h3>
            <p>All content on the site, including text, logos, and images, are the intellectual property of Dollar Sign Clothing and cannot be used without permission.</p>
        </div>

        <div class="terms-item">
            <h3>Limitation of Liability</h3>
            <p>We are not liable for any damages resulting from the use of this website or the purchase of our products. We do not guarantee the website will be error-free.</p>
        </div>

        <div class="terms-item">
            <h3>Changes to Terms</h3>
            <p>We may update these Terms and Conditions at any time. The latest version will be posted on the website with an updated date. Please review periodically.</p>
        </div>

        <div class="terms-item">
            <h3>Governing Law</h3>
            <p>These terms are governed by the laws of 86 Nitang Avenue, Quezon City, Philippines. Disputes will be resolved in the courts of 86 Nitang Avenue, Quezon City, Philippines.</p>
        </div>

        <div class="terms-item">
            <h3>Contact Us</h3>
            <p>For any questions, contact us at:</p>
            <ul>
                <li><strong>Email:</strong> dollarsign.clothing@gmail.com</li>
                <li><strong>Facebook:</strong> <a href="https://web.facebook.com/profile.php?id=61550540038795" target="_blank" class="dollarsign-facebook-link">Dollar Sign Clothing</a></li>
            </ul>
        </div>
    </div>

    <style>
        .terms-conditions-title {
            font-family: 'Nutty Noises';
            font-size: 100px;
            margin: 100px 0px 50px;
        }

        .terms-section {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            box-sizing: border-box;
            background-color: rgb(216, 216, 216);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            border-radius: 3px;
        }

        .terms-section h2 {
            font-family: 'Nutty Noises';
            font-size: 100px;
        }

        .terms-item {
            margin-bottom: 20px;
            line-height: 1.5;
            text-align: justify;
        }

        .terms-item h3 {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .terms-item p, .terms-item ul {
            font-size: 14px;
        }

        .terms-item ul {
            padding-left: 20px;
        }

        .terms-item li {
            margin: 5px 0;
        }

        .dollarsign-facebook-link {
            color:rgb(0, 0, 0);
            text-decoration: none;
        }

        .dollarsign-facebook-link:hover {
            text-decoration: underline;
        }
    </style>

    <?php include("footer.php"); ?>
</body>
</html>
