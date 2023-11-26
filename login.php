<?php
    require_once '../database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                <li><a class="nav-link link" href="home.html">Home</a></li>
                <li><a class="nav-link link" href="categories.html">Menu</a></li>
                <li><a class="nav-link link" href="login.html">Login</a></li>
                <li><a class="nav-link link" href="sing-up.html">Sign Up</a></li>
                <li><a class="nav-link link" href="#">Your Cart</a></li>
            </ul>
        </nav>
    </header>
    <main class="access-main-container">
        <div class="form-container">
            <h2 class="form-title">Login</h2>
            <form action="#" method="post">
                <div class="form-input-container">
                    <input type="text" name="username" id="username" placeholder="Username" required>
                    <img class="input-icon" src="./imgs/icons/user.svg" alt="Delivery">
                </div>
                <div class="form-input-container">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <img class="input-icon" src="./imgs/icons/lock.svg" alt="Delivery">
                </div>
                <div class="remember-me-container">
                    <label class="remember-me-text"><input class="remember-me-input" type="checkbox" name="forgot" id="forgot">Remember me</label>
                    <a class="remember-me-link" href="#">Forgot password?</a>
                </div>
                <input class="login-btn" type="submit" name="submit" value="Log In">
                <div class="switch-container">
                    <p class="switch-text">Don't you have an account? <a class="switch-link" href="sing-up.html">Register</a></p>
                </div>
            </form>
        </div>
    </main>
</body>
</html>