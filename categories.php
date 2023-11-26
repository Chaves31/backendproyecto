<?php
    require_once '../database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
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
    <main>
        <section class="categories-begin">
            <h1 class="categories-title">Our Categories</h1>
            <div class="btns-containers">
                <a class="btn-categories btn-text" href="#">All</a>
                <a class="btn-categories btn-text" href="#">Entrees</a>
                <a class="btn-categories btn-text" href="#">Desserts</a>
                <a class="btn-categories btn-text" href="#">Drinks</a>
                <a class="btn-categories btn-text" href="#">Starters and Salads</a>
            </div>
            <form class="search-form">
                <input class="full-width search-input" type="text" placeholder="Search">
                <button class="search-btn" type="submit"><img class="search-logo" src="./imgs/icons/search.svg" alt="Search"></button>
            </form>
            <div class="dishes-categories-container">
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
        </section>
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