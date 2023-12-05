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
                <li><a class="nav-link link" href="home.php">Home</a></li>
                <li><a class="nav-link link" href="categories.php">Menu</a></li>
                <li><a class="nav-link link" href="cart.php">Your Cart</a></li>
                <?php
                    session_start();
                    if(isset($_SESSION["isLoggedIn"])){
                        echo "<li><a class='nav-link link' href='./profile.php'>".$_SESSION["fullname"]."</a></li>";
                        echo "<li><a class='nav-link link' href='./logout.php'>Logout</a></li>";
                    }else{
                        echo "<li><a class='nav-link link' href='./form.php'>Login</a></li>";
                    }
                ?>
            </ul>
            
        </nav>
        
    </header>