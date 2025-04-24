<?php
session_start();
require_once "database.php";

$isLoggedIn = isset($_SESSION["users"]);

$popupShown = isset($_SESSION['popup_shown']) ? $_SESSION['popup_shown'] : false;

if (!$popupShown) {
    $_SESSION['popup_shown'] = true;
    $showPopup = true;
} else {
    $showPopup = false;
}

$verificationMessage = isset($_SESSION['verification_message']) ? $_SESSION['verification_message'] : null;
unset($_SESSION['verification_message']);
?>

<?php if ($showPopup): ?>
    <div id="popupAd" class="popup">
        <div class="popup-content">
            <h2>FREE SHIPPING</h2>
            <p>Get it Delivered Free</p>
            <p>Anywhere in the Philippines</p>
            <button id="closePopup">Close</button>
        </div>
    </div>
<?php endif; ?>

<?php if ($verificationMessage): ?>
    <div id="verificationPopup" class="popup-verification">
        <div class="popup-verification-content">
            <p><?= htmlspecialchars($verificationMessage) ?></p>
        </div>
    </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOLLARSIGN</title>
    <link rel="stylesheet" href="main.css">
    <script src="clothingData.js"></script>
    <script defer src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <?php include("navbar.php"); ?>

    <!-- Banner Section -->
    <main>
        <section class="banner">
            <img src="images/banner.png" alt="Banner">
        </section>
    </main>

    <!-- New Arrival Section -->
    <section class="new-arrival">
        <div class="new-arrival-header">
            <h2>NEW ARRIVAL</h2>
            <a href="shop.php" class="shop-button">SHOP</a>
        </div>
        <div class="new-arrival-container" id="newArrivalSection">
            <!-- New arrival products will be dynamically loaded here -->
        </div>
    </section>

    <?php include("footer.php"); ?>
    
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const closePopup = document.getElementById('closePopup');
        if (closePopup) {
            closePopup.addEventListener('click', () => {
                document.getElementById('popupAd').style.display = 'none';
            });
        }
        
        const verificationPopup = document.getElementById('verificationPopup');
        if (verificationPopup) {
            setTimeout(() => {
                verificationPopup.classList.add('fade-out');
                setTimeout(() => {
                    verificationPopup.style.display = 'none';
            }, 500);
        }, 2000);
    }
});
    </script>
</body>
</html>