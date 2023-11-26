<?php
    require_once '../database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        <div class="banner full-width">
            <section class="banner-information">
                <h1 class="banner-title">Find Your Favorite Food</h1>
                <p class="banner-text">The best Italian restaurant, discover the magic of Italian gastronomy on every plate.</p>
                <div class="btn-container">
                    <a class="btn-cta link" href="categories.html">See more</a>
                </div>
            </section>
        </div>
    </header>
    <main class="main-container">
        <div class="distinctive-container">
            <div class="benefits-container">
                <div>
                    <img class="icons" src="./imgs/icons/delivery.svg" alt="Delivery">
                </div>
                <section>
                    <h3 class="sub-sub-title">Free Shipping</h3>
                    <p class="regular-text">On all purchases</p>
                </section>
            </div>
            <div class="benefits-container">
                <div>
                    <img class="icons" src="./imgs/icons/shield.svg" alt="Security">
                </div>
                <section>
                    <h3 class="sub-sub-title">Secure Payment</h3>
                    <p class="regular-text">On all purchases</p>
                </section>
            </div>
            <div class="benefits-container">
                <div>
                    <img class="icons" src="./imgs/icons/food-tray.svg" alt="Menu">
                </div>
                <section>
                    <h3 class="sub-sub-title">Extensive Menu</h3>
                    <p class="regular-text">+30 Italian dishes</p>
                </section>
            </div>
        </div>
        <section>
            <h2 class="subtitle">Latest</h2>
            <hr class="line">
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
        <section>
            <h2 class="subtitle">Best Sellers</h2>
            <hr class="line">
            <div class="top-dishes-container">
                <div class="best-sellers-container">
                    <div class="number-container">
                        <p>#1</p>
                    </div>
                    <div>
                        <img class="img" src="./imgs/lasagna.webp" alt="Lasagna">
                    </div>
                    <section class="section-info">
                        <h3 class="sub-sub-title">Lorem Ipsum</h3>
                        <div class="categories-and-servers">
                            <h4>Category</h4>
                            <h4>Servers</h4>
                        </div>
                        <p class="regular-text">Lorem ipsum dolor sit amet, congueriu consectetur adipiscing elit in nequema dignisim nisl crumer.</p>
                        <a class="btn-prices btn-base margin-none" href="details.html">&dollar;10.99 || Order Now</a>
                    </section>
                </div>
                <div class="best-sellers-container">
                    <div class="number-container">
                        <p>#2</p>
                    </div>
                    <div>
                        <img class="img" src="./imgs/lasagna.webp" alt="Lasagna">
                    </div>
                    <section class="section-info">
                        <h3 class="sub-sub-title">Lorem Ipsum</h3>
                        <div class="categories-and-servers">
                            <h4>Category</h4>
                            <h4>Servers</h4>
                        </div>
                        <p class="regular-text">Lorem ipsum dolor sit amet, congueriu consectetur adipiscing elit in nequema dignisim nisl crumer.</p>
                        <a class="btn-prices btn-base margin-none" href="details.html">&dollar;10.99 || Order Now</a>
                    </section>
                </div>
                <div class="best-sellers-container">
                    <div class="number-container">
                        <p>#3</p>
                    </div>
                    <div>
                        <img class="img" src="./imgs/lasagna.webp" alt="Lasagna">
                    </div>
                    <section class="section-info">
                        <h3 class="sub-sub-title">Lorem Ipsum</h3>
                        <div class="categories-and-servers">
                            <h4>Category</h4>
                            <h4>Servers</h4>
                        </div>
                        <p class="regular-text">Lorem ipsum dolor sit amet, congueriu consectetur adipiscing elit in nequema dignisim nisl crumer.</p>
                        <a class="btn-prices btn-base margin-none" href="details.html">&dollar;10.99 || Order Now</a>
                    </section>
                </div>
                <div class="best-sellers-container">
                    <div class="number-container">
                        <p>#4</p>
                    </div>
                    <div>
                        <img class="img" src="./imgs/lasagna.webp" alt="Lasagna">
                    </div>
                    <section class="section-info">
                        <h3 class="sub-sub-title">Lorem Ipsum</h3>
                        <div class="categories-and-servers">
                            <h4>Category</h4>
                            <h4>Servers</h4>
                        </div>
                        <p class="regular-text">Lorem ipsum dolor sit amet, congueriu consectetur adipiscing elit innequema dignisim nisl crumer.</p>
                        <a class="btn-prices btn-base margin-none" href="details.html">&dollar;10.99 || Order Now</a>
                    </section>
                </div>
                <div class="best-sellers-container">
                    <div class="number-container">
                        <p>#5</p>
                    </div>
                    <div class="img-container">
                        <img class="img" src="./imgs/lasagna.webp" alt="Lasagna">
                    </div>
                    <section class="section-info">
                        <h3 class="sub-sub-title">Lorem Ipsum</h3>
                        <div class="categories-and-servers">
                            <h4>Category</h4>
                            <h4>Servers</h4>
                        </div>
                        <p class="regular-text">Lorem ipsum dolor sit amet, congueriu consectetur adipiscing elit in nequema dignisim nisl crumer.</p>
                        <a class="btn-prices btn-base margin-none" href="details.html">&dollar;10.99 || Order Now</a>
                    </section>
                </div>
                <div class="best-sellers-container">
                    <div class="number-container">
                        <p>#6</p>
                    </div>
                    <div>
                        <img class="img" src="./imgs/lasagna.webp" alt="Lasagna">
                    </div>
                    <section class="section-info">
                        <h3 class="sub-sub-title">Lorem Ipsum</h3>
                        <div class="categories-and-servers">
                            <h4>Category</h4>
                            <h4>Servers</h4>
                        </div>
                        <p class="regular-text">Lorem ipsum dolor sit amet, congueriu consectetur adipiscing elit in nequema dignisim nisl crumer.</p>
                        <a class="btn-prices btn-base margin-none" href="details.html">&dollar;10.99 || Order Now</a>
                    </section>
                </div>
                <div class="best-sellers-container">
                    <div class="number-container">
                        <p>#7</p>
                    </div>
                    <div>
                        <img class="img" src="./imgs/lasagna.webp" alt="Lasagna">
                    </div>
                    <section class="section-info">
                        <h3 class="sub-sub-title">Lorem Ipsum</h3>
                        <div class="categories-and-servers">
                            <h4>Category</h4>
                            <h4>Servers</h4>
                        </div>
                        <p class="regular-text">Lorem ipsum dolor sit amet, congueriu consectetur adipiscing elit in nequema dignisim nisl crumer.</p>
                        <a class="btn-prices btn-base margin-none" href="details.html">&dollar;10.99 || Order Now</a>
                    </section>
                </div>
                <div class="best-sellers-container">
                    <div class="number-container">
                        <p>#8</p>
                    </div>
                    <div>
                        <img class="img" src="./imgs/lasagna.webp" alt="Lasagna">
                    </div>
                    <section class="section-info">
                        <h3 class="sub-sub-title">Lorem Ipsum</h3>
                        <div class="categories-and-servers">
                            <h4>Category</h4>
                            <h4>Servers</h4>
                        </div>
                        <p class="regular-text">Lorem ipsum dolor sit amet, congueriu consectetur adipiscing elit in nequema dignisim nisl crumer.</p>
                        <a class="btn-prices btn-base margin-none" href="details.html">&dollar;10.99 || Order Now</a>
                    </section>
                </div>
                <div class="best-sellers-container">
                    <div class="number-container">
                        <p>#9</p>
                    </div>
                    <div>
                        <img class="img" src="./imgs/lasagna.webp" alt="Lasagna">
                    </div>
                    <section class="section-info">
                        <h3 class="sub-sub-title">Lorem Ipsum</h3>
                        <div class="categories-and-servers">
                            <h4>Category</h4>
                            <h4>Servers</h4>
                        </div>
                        <p class="regular-text">Lorem ipsum dolor sit amet, congueriu consectetur adipiscing elit in nequema dignisim nisl crumer.</p>
                        <a class="btn-prices btn-base margin-none" href="details.html">&dollar;10.99 || Order Now</a>
                    </section>
                </div>
                <div class="best-sellers-container">
                    <div class="number-container">
                        <p>#10</p>
                    </div>
                    <div>
                        <img class="img" src="./imgs/lasagna.webp" alt="Lasagna">
                    </div>
                    <section class="section-info">
                        <h3 class="sub-sub-title">Lorem Ipsum</h3>
                        <div class="categories-and-servers">
                            <h4>Category</h4>
                            <h4>Servers</h4>
                        </div>
                        <p class="regular-text">Lorem ipsum dolor sit amet, congueriu consectetur adipiscing elit in nequema dignisim nisl crumer.</p>
                        <a class="btn-prices btn-base margin-none" href="details.html">&dollar;10.99 || Order Now</a>
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