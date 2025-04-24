<?php
session_start();

if (!isset($_SESSION['users'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Checkout - DOLLARSIGN</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Checkout</h1>
        <a href="shop.php">← Continue Shopping</a>
    </header>

    <main id="checkout-container">
        <div id="cart-summary">
            <h2>Your Cart</h2>
            <div id="checkout-items"></div>
            <p><strong>Total: ₱<span id="checkout-total">0.00</span></strong></p>
            <button id="place-order">Place Order</button>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const checkoutItems = document.getElementById('checkout-items');
            const checkoutTotal = document.getElementById('checkout-total');
            const cartData = JSON.parse(localStorage.getItem('checkoutCart')) || [];

            // If cart is empty, redirect to shop
            if (cartData.length === 0) {
                alert('Your cart is empty!');
                window.location.href = 'shop.php';
                return;
            }

            // Display cart items
            let total = 0;
            cartData.forEach(item => {
                const itemElement = document.createElement('div');
                itemElement.className = 'checkout-item';
                itemElement.innerHTML = `
                    <img src="${item.image}" alt="${item.name}" class="checkout-item-img">
                    <div>
                        <p><b>${item.name} (${item.size})</b></p>
                        <p>₱${item.price.toFixed(2)} x ${item.quantity}</p>
                    </div>
                `;
                checkoutItems.appendChild(itemElement);
                total += item.price * item.quantity;
            });

            checkoutTotal.textContent = total.toFixed(2);

            // Handle "Place Order" button
            document.getElementById('place-order').addEventListener('click', () => {
                alert('Order placed successfully!');
                localStorage.removeItem('cart');
                localStorage.removeItem('checkoutCart');
                window.location.href = 'index.php';
            });
        });
    </script>
</body>

</html>
