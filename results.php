<?php
    require_once './database.php';
    // Reference: https://medoo.in/api/select

    if(isset($_GET["keyword"])){

        $items = $database->select("tb_dishes","*",["dish_name[~]" => $_GET["keyword"]]);

    }else{
        echo "notfound";
    }
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
    <?php
        include "./parts/header.php";
    ?>
    <main>
        <section class="categories-begin">
            <h1 class="categories-title">Our Categories</h1>
            <!--<div class="btns-containers">
                <a class="btn-categories btn-text" href="#">All</a>
                <a class="btn-categories btn-text" href="#">Entrees</a>
                <a class="btn-categories btn-text" href="#">Desserts</a>
                <a class="btn-categories btn-text" href="#">Drinks</a>
                <a class="btn-categories btn-text" href="#">Starters and Salads</a>
            </div>-->
            <form class="search-form" method= "get" action="results.php">
                <input class="full-width search-input" id="search" class="search" type="text" name="keyword" placeholder="Search">
                <button class="search-btn" type="submit"><img class="search-logo" src="./imgs/icons/search.svg" alt="Search"></button>
            </form>
            <div class="dishes-categories-container">
                <?php
                if(count($items) > 0){
                    foreach($items as $item){
                        echo "<div class='showned-dish-container'>";
                                echo "<div>";
                                    echo "<img class='img' src='./imgs/".$item["dish_image"]."' alt='".$item["dish_name"]."'>";
                                echo "</div>";
                                echo "<section class='information-container'>";
                                    echo "<h3 class='sub-sub-title'>".$item["dish_name"]."</h3>";
                                    echo "<p class='regular-text'>".substr($item["dish_description"], 0, 60)."...</p>";
                                    echo "<a class='btn-prices btn-base' href='details.php?id=".$item["id_dish"]."'>$".$item["dish_price"]." || Order Now</a>";
                                echo "</section>";
                            echo "</div>";
                    }
                }
                    
                ?>
                
                        
            </div>
        </section>
    </main>
    <?php
        include "./parts/footer.php";
    ?>
</body>
</html>