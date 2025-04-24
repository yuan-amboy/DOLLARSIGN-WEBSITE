<!-- Recommended Products Section -->
<div class="recommendation-container">
    <h2>RECOMMENDATION</h2>
    <div class="recommendation-grid" id="recommendations">
        <!-- Recommended products will be inserted here -->
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    const productName = "<?php echo htmlspecialchars($productName, ENT_QUOTES, 'UTF-8'); ?>";
    let currentProduct = null;

    if (typeof products !== 'undefined') {
        currentProduct = products.find(p => p.name === productName);

        if (currentProduct) {
            document.getElementById('product-name').textContent = currentProduct.name;
            document.getElementById('product-price').textContent = currentProduct.price;
            document.getElementById('product-description').textContent = currentProduct.description;
            
            const productImage = document.getElementById('product-image');
            productImage.src = currentProduct.imageFront;

            productImage.addEventListener('mouseover', () => {
                productImage.src = currentProduct.imageBack;
            });

            productImage.addEventListener('mouseout', () => {
                productImage.src = currentProduct.imageFront;
            });
        }

        generateRecommendations(currentProduct);
    } else {
        console.error("Error: 'products' is not defined.");
    }
});

function generateRecommendations(currentProduct) {
    if (!products || products.length === 0) return;

    // Filter out the current product
    let filteredProducts = products.filter(p => p.name !== currentProduct.name);

    // Shuffle and pick 4 random products
    let shuffled = filteredProducts.sort(() => 0.5 - Math.random());
    let recommended = shuffled.slice(0, 4);

    // Insert into the DOM
    const recommendationsContainer = document.getElementById('recommendations');
    recommendationsContainer.innerHTML = recommended.map(p => `
        <div class="recommended-item">
            <a href="product.php?product=${encodeURIComponent(p.name)}">
                <img src="${p.imageFront}" alt="${p.name}" 
                    onmouseover="this.src='${p.imageBack}'" 
                    onmouseout="this.src='${p.imageFront}'">
                <p class="recommended-title">${p.name}</p>
                <p class="recommended-price">${p.price}</p>
            </a>
        </div>
    `).join('');
}
</script>

<style>
    .recommendation-container {
    margin-top: 40px;
    padding: 20px;
    text-align: center;
}

.recommendation-container h2 {
    font-family: 'Nutty Noises', sans-serif;
    font-size: 100px;
    margin: 0px;
    padding: 0px;
}

.recommendation-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 20px;
    max-width: 100%;
    margin: 0 auto;
    align-items: flex-start;
    padding-top: 20px;
}

.recommended-item {
    background-color: rgb(216, 216, 216);
    border-radius: 3px;
    padding: 10px;
    margin: 0px;
    width: 100%;
    max-width: 210px;
    transition: background-color 0.3s ease, width 0.3s ease; 
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.recommended-item a {
    text-decoration: none;
    color: inherit;
}

.recommended-item:hover {
    background-color: #e0e0e0;
}

.recommended-item img {
    width: 200px;
    margin: 0px;
    border-radius: 3px;
    object-fit: contain;
}

.recommended-title {
    font-family: Arial, sans-serif;
    font-size: 14px;
    font-weight: bold;
    color: rgb(0, 0, 0);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    margin: 10px 0px;
}

.recommended-price {
    font-family: Arial, sans-serif;
    font-size: 14px;
    font-weight: bold;
    color: rgb(0, 0, 0);
    margin: 0px;
}
</style>