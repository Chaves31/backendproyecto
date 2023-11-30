<?php
    require_once './database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing-Up</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <header>
        <nav class="nav">
            <a href="home.html"><img class="logo" src="./imgs/icons/logo.svg" alt="Logo"></a>
            <input class="mobile-check" type="checkbox">
            <div class="bar-container">
                <span class="bar1"></span>
                <span class="bar2"></span>
                <span class="bar3"></span>
            </div>
            <ul class="nav-list">
                <li><a class="nav-link link" href="home.php">Home</a></li>
                <li><a class="nav-link link" href="categories.php">Menu</a></li>
                <li><a class="nav-link link" href="login.php">Login</a></li>
                <li><a class="nav-link link" href="sing-up.php">Sign Up</a></li>
                <li><a class="nav-link link" href="#">Your Cart</a></li>
            </ul>
        </nav>
    </header>
    <main class="access-main-container">
        <div class="form-container">
            <h2 class="form-title">New Account</h2>
            <form action="#" method="post">
                <div class="form-input-container">
                    <input type="text" name="fullname" id="fullname" placeholder="Fullname" required>
                    <img class="input-icon" src="./imgs/icons/fullname.svg" alt="Delivery">
                </div>
                <div class="form-input-container">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <img class="input-icon" src="./imgs/icons/email.svg" alt="Delivery">
                </div>
                <div class="form-input-container">
                    <input type="text" name="username" id="username" placeholder="Username" required>
                    <img class="input-icon" src="./imgs/icons/user.svg" alt="Delivery">
                </div>
                <div class="form-input-container">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <img class="input-icon" src="./imgs/icons/lock.svg" alt="Delivery">
                </div>
                <div class="remember-me-container">
                    <label class="remember-me-text"><input class="remember-me-input" type="checkbox" name="forgot" id="forgot" required>I agree to <a class="remember-me-link" href="#">Terms and Privacy Policy</a>.</label>
                </div>
                <input class="login-btn" type="submit" name="submit" value="Sign Up">
                <div class="switch-container">
                    <p class="switch-text">Do you have an account? <a class="switch-link" href="login.html">Sign Up</a></p>
                </div>
            </form>
        </div>
    </main>
</body>
</html>