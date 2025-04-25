<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dollar Sign </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dollar Sign Shop</title>
    <style>
        :root {
            --primary-color: #222;
            --secondary-color: #444;
            --accent-color: #f50;
            --light-color: #f5f5f5;
            --border-radius: 8px;
            --box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            --transition: all 0.3s ease;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: var(--secondary-color);
        }
        
        .shop-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        
        .shop-title {
            text-align: center;
            margin-bottom: 1rem;
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .shop-description {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 2.5rem;
            color: var(--secondary-color);
            font-size: 1.1rem;
            line-height: 1.6;
        }
        
        .filter-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            gap: 1rem;
        }
        
        .search-container {
            flex-grow: 1;
            max-width: 400px;
            position: relative;
        }
        
        .search-container input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
        }
        
        .search-container input:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 2px rgba(255, 85, 0, 0.2);
        }
        
        .search-icon {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
        }
        
        .filter-options {
            display: flex;
            gap: 1rem;
        }
        
        .filter-dropdown {
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            background-color: white;
            font-size: 0.9rem;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .filter-dropdown:hover {
            border-color: #bbb;
        }
        
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
            gap: 2rem;
        }
        
        .product-card {
            background-color: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            cursor: pointer;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0,0,0,0.1);
        }
        
        .product-image {
            position: relative;
            height: 250px;
            background-color: #f5f5f5;
            overflow: hidden;
        }
        
        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .product-card:hover .product-image img {
            transform: scale(1.05);
        }
        
        .product-badge {
            position: absolute;
            top: 1rem;
            left: 1rem;
            background-color: var(--accent-color);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .quick-view {
            position: absolute;
            bottom: -3rem;
            left: 0;
            right: 0;
            background-color: rgba(0,0,0,0.7);
            color: white;
            text-align: center;
            padding: 0.75rem;
            transition: bottom 0.3s ease;
            font-weight: 500;
        }
        
        .product-card:hover .quick-view {
            bottom: 0;
        }
        
        .product-info {
            padding: 1.25rem;
        }
        
        .product-name {
            font-size: 1.1rem;
            font-weight: 600;
            margin: 0 0 0.5rem;
            color: var(--primary-color);
        }
        
        .product-description {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 1rem;
            line-height: 1.5;
        }
        
        .product-price {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--accent-color);
        }
        
        .product-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1rem;
        }
        
        .add-to-cart {
            background-color: var(--accent-color);
            color: white;
            border: none;
            padding: 0.6rem 1.25rem;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .add-to-cart:hover {
            background-color: #e04b00;
        }
        
        .wishlist {
            background: none;
            border: none;
            color: #888;
            cursor: pointer;
            font-size: 1.25rem;
            transition: var(--transition);
        }
        
        .wishlist:hover {
            color: #ff3b5c;
        }
        
        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
            z-index: 1000;
            overflow-y: auto;
        }
        
        .modal-content {
            position: relative;
            background-color: white;
            width: 90%;
            max-width: 1000px;
            margin: 2rem auto;
            border-radius: var(--border-radius);
            overflow: hidden;
            animation: modalFadeIn 0.3s;
        }
        
        @keyframes modalFadeIn {
            from {opacity: 0; transform: translateY(-20px);}
            to {opacity: 1; transform: translateY(0);}
        }
        
        .modal-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: rgba(255,255,255,0.8);
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
            font-size: 1.2rem;
            border: none;
        }
        
        .modal-body {
            display: flex;
            flex-direction: column;
            padding: 0;
        }
        
        @media (min-width: 768px) {
            .modal-body {
                flex-direction: row;
            }
        }
        
        .modal-images {
            flex: 1;
            background-color: #f9f9f9;
        }
        
        .main-image {
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f5f5f5;
        }
        
        .main-image img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        
        .image-thumbnails {
            display: flex;
            padding: 1rem;
            gap: 0.5rem;
            overflow-x: auto;
        }
        
        .image-thumbnail {
            width: 60px;
            height: 60px;
            border-radius: 4px;
            overflow: hidden;
            cursor: pointer;
            border: 2px solid transparent;
        }
        
        .image-thumbnail.active {
            border-color: var(--accent-color);
        }
        
        .image-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .modal-info {
            flex: 1;
            padding: 2rem;
        }
        
        .modal-product-name {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 0 0.5rem;
            color: var(--primary-color);
        }
        
        .modal-product-price {
            font-size: 1.5rem;
            color: var(--accent-color);
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        
        .modal-product-description {
            font-size: 1rem;
            line-height: 1.7;
            color: #555;
            margin-bottom: 2rem;
        }
        
        .color-options {
            margin-bottom: 1.5rem;
        }
        
        .option-title {
            font-weight: 600;
            margin-bottom: 0.75rem;
        }
        
        .color-select {
            display: flex;
            gap: 0.75rem;
        }
        
        .color-option {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            cursor: pointer;
            border: 2px solid transparent;
        }
        
        .color-option.selected {
            border-color: var(--accent-color);
        }
        
        .color-black {
            background-color: #222;
        }
        
        .color-white {
            background-color: #fff;
            border: 1px solid #ddd;
        }
        
        .color-red {
            background-color: #e02020;
        }
        
        .color-blue {
            background-color: #2040e0;
        }
        
        .size-options {
            margin-bottom: 2rem;
        }
        
        .size-select {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
        }
        
        .size-option {
            padding: 0.5rem 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: var(--transition);
        }
        
        .size-option.selected {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }
        
        .quantity-selector {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .quantity-btn {
            width: 36px;
            height: 36px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            user-select: none;
        }
        
        .quantity-btn:first-child {
            border-radius: 4px 0 0 4px;
        }
        
        .quantity-btn:last-child {
            border-radius: 0 4px 4px 0;
        }
        
        .quantity-input {
            width: 60px;
            height: 36px;
            border: 1px solid #ddd;
            border-left: none;
            border-right: none;
            text-align: center;
            font-size: 1rem;
        }
        
        .modal-actions {
            display: flex;
            gap: 1rem;
        }
        
        .modal-add-to-cart {
            flex: 1;
            background-color: var(--accent-color);
            color: white;
            border: none;
            padding: 1rem;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .modal-add-to-cart:hover {
            background-color: #e04b00;
        }
        
        .modal-wishlist {
            width: 48px;
            height: 48px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .modal-wishlist:hover {
            border-color: #ff3b5c;
            color: #ff3b5c;
        }
    </style>
</head>
<body>
    <main class="shop-container">
        <h1 class="shop-title">SHOP OUR COLLECTION</h1>
        <p class="shop-description">Explore our exclusive collection of high-quality streetwear. Each piece is designed with attention to detail and made from premium materials for comfort and style.</p>
        
        <div class="filter-bar">
            <div class="search-container">
                <input type="text" placeholder="Search products...">
                <span class="search-icon">🔍</span>
            </div>
            <div class="filter-options">
                <select class="filter-dropdown">
                    <option value="">Sort by</option>
                    <option value="price-low">Price: Low to High</option>
                    <option value="price-high">Price: High to Low</option>
                    <option value="newest">Newest First</option>
                </select>
                <select class="filter-dropdown">
                    <option value="">Filter by</option>
                    <option value="tshirts">T-Shirts</option>
                    <option value="hoodies">Hoodies</option>
                    <option value="accessories">Accessories</option>
                </select>
            </div>
        </div>
        
        <div class="products-grid">
            <!-- Product 1 -->
            <div class="product-card" onclick="openModal('product1')">
                <div class="product-image">
                    <img src="/images/dollar-black-front.jpg" alt="DOLLARSIGN - BLACK">
                    <div class="product-badge">Popular</div>
                    <div class="quick-view">Quick View</div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">DOLLARSIGN - BLACK</h3>
                    <p class="product-description">Classic black tee with signature DOLLARSIGN graphic print</p>
                    <div class="product-actions">
                        <span class="product-price">₱500.00</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <!-- Product 2 -->
            <div class="product-card" onclick="openModal('product2')">
                <div class="product-image">
                    <img src="/images/dollar-white-front.jpg"alt="DOLLARSIGN - WHITE">
                    <div class="quick-view">Quick View</div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">DOLLARSIGN - WHITE</h3>
                    <p class="product-description">Premium white tee featuring bold DOLLARSIGN logo print</p>
                    <div class="product-actions">
                        <span class="product-price">₱500.00</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <!-- Product 3 -->
            <div class="product-card" onclick="openModal('product3')">
                <div class="product-image">
                    <img src="/images/dollar-red-front.jpg"alt="DOLLARSIGN - RED">
                    <div class="quick-view">Quick View</div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">DOLLARSIGN - RED</h3>
                    <p class="product-description">Vibrant red tee with contrast DOLLARSIGN print design</p>
                    <div class="product-actions">
                        <span class="product-price">₱500.00</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <!-- Product 4 -->
            <div class="product-card" onclick="openModal('product4')">
                <div class="product-image">
                    <img src="/images/dollar-blue-front.jpg" alt="DOLLARSIGN - BLUE">
                    <div class="quick-view">Quick View</div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">DOLLARSIGN - BLUE</h3>
                    <p class="product-description">Bold blue tee with signature DOLLARSIGN statement design</p>
                    <div class="product-actions">
                        <span class="product-price">₱500.00</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <!-- Product 5 -->
            <div class="product-card" onclick="openModal('product5')">
                <div class="product-image">
                    <img src="/images/smoke-weed-black-front.jpg" alt="SMOKE WEED - BLACK">
                    <div class="product-badge">New</div>
                    <div class="quick-view">Quick View</div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">SMOKE WEED - BLACK</h3>
                    <p class="product-description">Black tee featuring urban SMOKE WEED graphic print</p>
                    <div class="product-actions">
                        <span class="product-price">₱500.00</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <!-- Product 6 -->
            <div class="product-card" onclick="openModal('product6')">
                <div class="product-image">
                    <img src="/images/smoke-weed-white-front.jpg"  alt="SMOKE WEED - WHITE">
                    <div class="quick-view">Quick View</div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">SMOKE WEED - WHITE</h3>
                    <p class="product-description">Clean white tee with SMOKE WEED street-inspired design</p>
                    <div class="product-actions">
                        <span class="product-price">₱500.00</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <!-- Product 7 -->
            <div class="product-card" onclick="openModal('product7')">
                <div class="product-image">
                    <img src="/images/smoke-weed-red-front.jpg"  alt="SMOKE WEED - RED">
                    <div class="quick-view">Quick View</div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">SMOKE WEED - RED</h3>
                    <p class="product-description">Eye-catching red tee with SMOKE WEED statement graphic</p>
                    <div class="product-actions">
                        <span class="product-price">₱500.00</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <!-- Product 8 -->
            <div class="product-card" onclick="openModal('product8')">
                <div class="product-image">
                    <img src="/images/smoke-weed-blue-front.jpg"  alt="SMOKE WEED - BLUE">
                    <div class="quick-view">Quick View</div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">SMOKE WEED - BLUE</h3>
                    <p class="product-description">Deep blue tee with signature SMOKE WEED urban print</p>
                    <div class="product-actions">
                        <span class="product-price">₱500.00</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <!-- Product 9 -->
            <div class="product-card" onclick="openModal('product9')">
                <div class="product-image">
                    <img src="/images/black-front.jpg" alt="DOLLAR - BLACK">
                    <div class="quick-view">Quick View</div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">DOLLAR - BLACK</h3>
                    <p class="product-description">Premium black tee with textured DOLLAR logo print</p>
                    <div class="product-actions">
                        <span class="product-price">₱250.00</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <!-- Product 10 -->
            <div class="product-card" onclick="openModal('product10')">
                <div class="product-image">
                    <img src="/images/white-front.jpg"  alt="DOLLAR - WHITE">
                    <div class="quick-view">Quick View</div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">DOLLAR - WHITE</h3>
                    <p class="product-description">Classic white tee with minimalist DOLLAR print design</p>
                    <div class="product-actions">
                        <span class="product-price">₱250.00</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <!-- Product 11 -->
            <div class="product-card" onclick="openModal('product11')">
                <div class="product-image">
                    <img src="/images/red-front.jpg" alt="DOLLAR - RED">
                    <div class="product-badge">Hot</div>
                    <div class="quick-view">Quick View</div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">DOLLAR - RED</h3>
                    <p class="product-description">Bold red tee with striking DOLLAR statement graphic</p>
                    <div class="product-actions">
                        <span class="product-price">₱250.00</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <!-- Product 12 -->
            <div class="product-card" onclick="openModal('product12')">
                <div class="product-image">
                    <img src="/images/blue-front.jpg" alt="DOLLAR - BLUE">
                    <div class="quick-view">Quick View</div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">DOLLAR - BLUE</h3>
                    <p class="product-description">Electric blue tee with unique DOLLAR graphic design</p>
                    <div class="product-actions">
                        <span class="product-price">₱250.00</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Product Modal -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal()">✕</button>
            <div class="modal-body">
                <div class="modal-images">
                    <div class="main-image">
                        <img id="modalMainImage" src="/images/black-front.jpg" alt="Product Image">
                    </div>
                    <div class="image-thumbnails">
                        <div class="image-thumbnail active">
                            <img src="/api/placeholder/400/320" alt="Thumbnail 1" onclick="changeMainImage(this.src)">
                        </div>
                        <div class="image-thumbnail">
                            <img src="/api/placeholder/400/320" alt="Thumbnail 2" onclick="changeMainImage(this.src)">
                        </div>
                        <div class="image-thumbnail">
                            <img src="/api/placeholder/400/320" alt="Thumbnail 3" onclick="changeMainImage(this.src)">
                        </div>
                    </div>
                </div>
                <div class="modal-info">
                    <h2 id="modalProductName" class="modal-product-name">Product Name</h2>
                    <div id="modalProductPrice" class="modal-product-price">₱500.00</div>
                    <p id="modalProductDescription" class="modal-product-description">
                        Premium quality t-shirt featuring our signature design. Made from 100% soft cotton for ultimate comfort and durability. The perfect addition to your streetwear collection with its unique graphic print and exceptional craftsmanship.
                    </p>
                    
                    <div class="color-options">
                        <div class="option-title">Color</div>
                        <div class="color-select">
                            <div class="color-option color-black selected" onclick="selectColor(this)"></div>
                            <div class="color-option color-white" onclick="selectColor(this)"></div>
                            <div class="color-option color-red" onclick="selectColor(this)"></div>
                            <div class="color-option color-blue" onclick="selectColor(this)"></div>
                        </div>
                    </div>
                    
                    <div class="size-options">
                        <div class="option-title">Size</div>
                        <div class="size-select">
                            <div class="size-option" onclick="selectSize(this)">S</div>
                            <div class="size-option selected" onclick="selectSize(this)">M</div>
                            <div class="size-option" onclick="selectSize(this)">L</div>
                            <div class="size-option" onclick="selectSize(this)">XL</div>
                            <div class="size-option" onclick="selectSize(this)">2XL</div>
                        </div>
                    </div>
                    
                    <div class="quantity-selector">
                        <div class="quantity-btn" onclick="decrementQuantity()">-</div>
                        <input type="number" class="quantity-input" value="1" min="1" max="10">
                        <div class="quantity-btn" onclick="incrementQuantity()">+</div>
                    </div>
                    
                    <div class="modal-actions">
                        <button class="modal-add-to-cart">Add to Cart</button>
                        <button class="modal-wishlist">♡</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Product data
        const products = {
            product1: {
                name: "DOLLARSIGN - BLACK",
                price: "₱500.00",
                description: "Premium quality black t-shirt featuring our signature DOLLARSIGN design. Made from 100% soft cotton for ultimate comfort and durability. The perfect addition to your streetwear collection with its unique graphic print and exceptional craftsmanship."
            },
            product2: {
                name: "DOLLARSIGN - WHITE",
                price: "₱500.00",
                description: "Classic white t-shirt with bold DOLLARSIGN print. Premium fabric ensures comfort for all-day wear. Clean design with striking contrast for an urban streetwear aesthetic."
            },
            product3: {
                name: "DOLLARSIGN - RED",
                price: "₱500.00",
                description: "Eye-catching red t-shirt with iconic DOLLARSIGN graphic. Made from high-quality cotton blend for superior comfort and durability. Stand out with this vibrant addition to your wardrobe."
            },
            product4: {
                name: "DOLLARSIGN - BLUE",
                price: "₱500.00",
                description: "Bold blue t-shirt featuring the signature DOLLARSIGN design. Premium fabric with excellent breathability makes this perfect for everyday wear. Unique colorway to elevate your street style."
            },
            product5: {
                name: "SMOKE WEED - BLACK",
                price: "₱500.00",
                description: "Black t-shirt featuring our urban SMOKE WEED graphic print. Crafted from soft premium cotton for maximum comfort. A statement piece that embodies street culture and bold style."
            },
            product6: {
                name: "SMOKE WEED - WHITE",
                price: "₱500.00",
                description: "Clean white t-shirt with SMOKE WEED street-inspired design. Premium quality fabric ensures durability and comfort. A versatile addition to your collection with its striking contrast graphic."
            },
            product7: {
                name: "SMOKE WEED - RED",
                price: "₱500.00",
                description: "Vibrant red tee with our popular SMOKE WEED graphic. Made from high-quality materials for lasting comfort. The bold color and design make this a standout piece in any wardrobe."
            },
            product8: {
                name: "SMOKE WEED - BLUE",
                price: "₱500.00",
                description: "Deep blue t-shirt with signature SMOKE WEED urban print. Premium cotton blend ensures maximum comfort and durability. A bold addition to your streetwear collection with its distinctive design."
            },
            product9: {
                name: "DOLLAR - BLACK",
                price: "₱250.00",
                description: "Premium black tee with textured DOLLAR logo print. Lightweight, breathable fabric perfect for everyday wear. Minimalist design makes this an essential addition to any wardrobe."
            },
            product10: {
                name: "DOLLAR - WHITE",
                price: "₱250.00",
                description: "Classic white tee with minimalist DOLLAR print design. High-quality fabric ensures comfort and longevity. Clean, versatile style perfect for layering or wearing on its own."
            },
            product11: {
                name: "DOLLAR - RED",
                price: "₱250.00",
                description: "Bold red tee with striking DOLLAR statement graphic. Made from premium cotton that offers superior comfort. A standout piece that brings vibrant energy to your street style."
            },
            product12: {
                name: "DOLLAR - BLUE",
                price: "₱250.00",
                description: "Electric blue tee with unique DOLLAR graphic design. Soft, durable fabric ensures all-day comfort. The perfect blend of style and quality for your casual wardrobe."
            }
        };
        
        // Modal functions
        function openModal(productId) {
            const modal = document.getElementById('productModal');
            const product = products[productId];
            
            // Update modal content
            document.getElementById('modalProductName').textContent = product.name;
            document.getElementById('modalProductPrice').textContent = product.price;
            document.getElementById('modalProductDescription').textContent = product.description;
            
            // Show modal
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden'; // Prevent scrolling
            
            // Stop event propagation
            event.stopPropagation();
        }
        
        function closeModal() {
            const modal = document.getElementById('productModal');
            modal.style.display = 'none';
            document.body.style.overflow = 'auto'; // Enable scrolling
        }
        
        // Close modal when clicking outside of content
        window.onclick = function(event) {
            const modal = document.getElementById('productModal');
            if (event.target == modal) {
                closeModal();
            }
        }
        
        function changeMainImage(src) {
            document.getElementById('modalMainImage').src = src;
            
            // Update active thumbnail
            const thumbnails = document.querySelectorAll('.image-thumbnail');
            thumbnails.forEach(thumb => {
                if (thumb.querySelector('img').src === src) {
                    thumb.classList.add('active');
                } else {
                    thumb.classList.remove('active');
                }
            });
        }
        
        function selectColor(element) {
            const colorOptions = document.querySelectorAll('.color-option');
            colorOptions.forEach(option => {
                option.classList.remove('selected');
            });
            element.classList.add('selected');
        }
        
        function selectSize(element) {
            const sizeOptions = document.querySelectorAll('.size-option');
            sizeOptions.forEach(option => {
                option.classList.remove('selected');
            });
            element.classList.add('selected');
        }
        
        function incrementQuantity() {
            const input = document.querySelector('.quantity-input');
            let value = parseInt(input.value);
            if (value < parseInt(input.max)) {
                input.value = value + 1;
            }
        }
        
        function decrementQuantity() {
            const input = document.querySelector('.quantity-input');
            let value = parseInt(input.value);
            if (value > parseInt(input.min)) {
                input.value = value - 1;
            }
        }
        
        // Prevent direct input in quantity field - only allow buttons
        document.querySelector('.quantity-input').addEventListener('input', function(e) {
            let value = parseInt(this.value);
            if (isNaN(value) || value < parseInt(this.min)) {
                this.value = this.min;
            } else if (value > parseInt(this.max)) {
                this.value = this.max;
            }
        });
        
        // Add to cart functionality
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function(e) {
                e.stopPropagation(); // Prevent modal from opening
                alert('Item added to cart!');
            });
        });
        
        document.querySelector('.modal-add-to-cart').addEventListener('click', function() {
            alert('Item added to cart!');
            closeModal();
        });
    </script>
</body>
</html>
<?php include 'footer.php'; ?>
<script src="responsive.js"></script>
</body>
