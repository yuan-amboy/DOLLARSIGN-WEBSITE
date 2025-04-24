<?php
session_start();
$isLoggedIn = isset($_SESSION["users"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | DOLLARSIGN</title>
    <link rel="stylesheet" href="main.css">
    <script defer src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <?php include("navbar.php"); ?>

    <!-- Privacy Policy Section -->
    <h2 class="privacy-title">PRIVACY POLICY</h2>
    <div class="privacy-section">

        <div class="privacy-item">
            <h3>Introduction</h3>
            <p>Dollar Sign Clothing is committed to protecting your privacy. This Privacy Policy explains how we collect, use, and protect your personal information when you use our website and services.</p>
        </div>

        <div class="privacy-item">
            <h3>Information We Collect</h3>
            <p>We may collect the following types of information:</p>
            <ul>
                <li><strong>Personal Information:</strong> Name, email address, shipping address, payment information.</li>
                <li><strong>Usage Information:</strong> IP address, browser type, pages visited, and time spent on the website.</li>
            </ul>
        </div>

        <div class="privacy-item">
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to:</p>
            <ul>
                <li>Process and fulfill orders</li>
                <li>Improve our website and services</li>
                <li>Send promotional emails and newsletters (with your consent)</li>
                <li>Provide customer support</li>
            </ul>
        </div>

        <div class="privacy-item">
            <h3>Cookies</h3>
            <p>Our website uses cookies to enhance your experience. Cookies are small files that store information about your preferences. You can disable cookies through your browser settings, though this may affect your experience on our website.</p>
        </div>

        <div class="privacy-item">
            <h3>Sharing Your Information</h3>
            <p>We do not sell, rent, or trade your personal information to third parties. We may share your information with trusted service providers, such as payment processors and shipping companies, to complete transactions.</p>
        </div>

        <div class="privacy-item">
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal data. However, please be aware that no method of data transmission over the internet is 100% secure.</p>
        </div>

        <div class="privacy-item">
            <h3>Your Rights</h3>
            <p>You have the right to access, correct, or delete your personal information at any time. To make changes, please contact our customer service team.</p>
        </div>

        <div class="privacy-item">
            <h3>Changes to the Privacy Policy</h3>
            <p>We reserve the right to update or change this Privacy Policy. Any changes will be posted on this page, and the revised policy will be effective immediately upon posting.</p>
        </div>

        <div class="privacy-item">
            <h3>Contact Us</h3>
            <p>If you have any questions about our Privacy Policy, please contact us at:</p>
            <ul>
                <li><strong>Email:</strong> dollarsign.clothing@gmail.com</li>
                <li><strong>Facebook:</strong> <a href="https://web.facebook.com/profile.php?id=61550540038795" target="_blank" class="dollarsign-facebook-link">Dollar Sign Clothing</a></li>
            </ul>
        </div>

    </div>

    <style>
        .privacy-title {
            font-family: 'Nutty Noises';
            font-size: 100px;
            text-align: center;
            margin: 100px 0px 50px;
        }

        .privacy-section {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            box-sizing: border-box;
            background-color: rgb(216, 216, 216);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            border-radius: 3px;
        }

        .privacy-item {
            margin-bottom: 20px;
            line-height: 1.5;
            text-align: justify;
        }

        .privacy-item h3 {
            font-size: 24px;
            margin: 0px 0px 10px;
        }

        .privacy-item p, .privacy-item ul {
            font-size: 16px;
        }

        .privacy-item ul {
            padding-left: 20px;
        }

        .privacy-item li {
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
