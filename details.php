<?php
    require_once '../database.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dish Details</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <header class="header-container">
        <nav class="nav">
            <a href="home.html"><img class="logo" src="./imgs/icons/logo.svg" alt="Logo"></a>
            <input class="mobile-check" type="checkbox">
            <div class="bar-container">
                <span class="bar1"></span>
                <span class="bar2"></span>
                <span class="bar3"></span>
            </div>
            <ul class="nav-list">
                <li><a class="nav-link link" href="home.html">Home</a></li>
                <li><a class="nav-link link" href="categories.html">Menu</a></li>
                <li><a class="nav-link link" href="login.html">Login</a></li>
                <li><a class="nav-link link" href="sing-up.html">Sign Up</a></li>
                <li><a class="nav-link link" href="#">Your Cart</a></li>
            </ul>
        </nav>
    </header>
    <main class="main-details-container">
        <div class="full-width details-section">
            <div class="details-img-container">
                <button class="translate-btn" type="submit"><img class="icons" src="./imgs/icons/translate.svg" alt="Translate"></button>
                <img class="img" src="./imgs/lasagna.webp" alt="Dish Image">
            </div>
            <section class="full-width">
                <h3 class="sub-sub-title">Insert Name Here</h3>
                <div class="categories-and-servers">
                    <h4>Category</h4>
                    <h4>Servers</h4>
                    <h4>Status</h4>
                </div>
                <p class="regular-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit in dignissim nisl nec nibh interdum, fringilla est vel, dapibus 
                lacus. Nulla eget diam vel erat convallis sagittis nec eu ex. Suspendisse pellentesque pharetra risus, id egestas eros, 
                Praesent et lorem orci. Donec nunc mi, iaculis sit amet magna quis, pellentesque efficitur magna. In egestas mi 
                metus, sed mollis neque porttitor non. Integer consectetur venenatis mi, ac suscipit turpis porta id.</p>
                <h4 class="regular-text medium-text margin-none">Ready to Order?</h4>
                <p class="regular-text">Remember that we offer three ordering methods:</p>
                <ul class="list-ordering-methods regular-text">
                    <li class="ordering-methods-list">Room</li>
                    <li class="ordering-methods-list">Express</li>
                    <li class="ordering-methods-list">Drop into take away</li>
                </ul>
                <p class="regular-text margin-none">Price</p>
                <p class="price-text">&dollar;10.99</p>
                <div class="btn-cart-container">
                    <button class="btn-cart btn-base"> <img class="shopping-cart-icon" src="./imgs/icons//shopping-cart.svg" alt="Shopping Cart"> Add to cart</button>
                </div>
            </section>
        </div>
        <aside class="recommendations-aside">
            <h3 class="subtitle margin-none">You'll Also Love</h3>
            <div class="latest-container">
                <div class="showned-dish-container">
                    <div>
                        <img class="img" src="./imgs/lasagna.webp" alt="Lasagna">
                    </div>
                    <section class="information-container">
                        <h3 class="sub-sub-title">Lorem Ipsum</h3>
                        <p class="regular-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit in dignissimnisl.</p>
                        <a class="btn-prices btn-base" href="details.html">&dollar;10.99 || Order Now</a>
                    </section>
                </div>
                <div class="showned-dish-container">
                    <div>
                        <img class="img" src="./imgs/lasagna.webp" alt="Lasagna">
                    </div>
                    <section class="information-container">
                        <h3 class="sub-sub-title">Lorem Ipsum</h3>
                        <p class="regular-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit in dignissimnisl.</p>
                        <a class="btn-prices btn-base" href="details.html">&dollar;10.99 || Order Now</a>
                    </section>
                </div>
            </div>
        </aside>
    </main>
    <footer class="footer-container">
        <div class="footer-content">
            <div class="footer-info">
                <a href="#"><img class="logo" src="./imgs/icons/logo.svg" alt="Logo"></a>
                <p class="footer-text">Discover authentic Italy in every dish at Mangica. Our handcrafted menu takes you on a unique culinary journey. Welcome to our Italian table, where the passion for the food meets the freshness of the ingredients.</p>
            </div>
            <div class="footer-links">
                <div>
                    <h3>Help</h3>
                    <ul class="nav-bottom-list">
                        <li><a class="link" href="#">Some FAQ</a></li>
                        <li><a class="link" href="#">Policies</a></li>
                        <li><a class="link" href="#">Privacy</a></li>
                    </ul>
                </div>
                <div>
                    <h3>About Us</h3>
                    <ul class="nav-bottom-list">
                        <li><a class="link" href="#">Our Story</a></li>
                        <li><a class="link" href="#">Our Team</a></li>
                        <li><a class="link" href="#">Our Location</a></li>
                    </ul>
                </div>
                <div>
                    <h3>Contact Us</h3>
                    <ul class="nav-bottom-list">
                        <li><a class="link" href="#">Facebook</a></li>
                        <li><a class="link" href="#">Instagram</a></li>
                        <li><a class="link" href="#">Tiktok</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="footer-legal">&copy; 2023. Mangica. All rights reserved.</p>
    </footer>
</body>
</html>