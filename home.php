<?php
    require_once './database.php';
    // Reference: https://medoo.in/api/select
    $items = $database->select("tb_dishes","*");

    $featured_items = $database->select("tb_dishes", "*", [
        "isFeatured" => "True" // Esto asume que "isFeatured" es un campo booleano en la base de datos
    ]);
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
    <?php
        include "./parts/header.php";
    ?>
    <?php
        include "./parts/banner.php";
    ?>
    <main class="main-container">
        <?php
            include "./parts/benefits.php";
        ?>
        <h2 class="subtitle">Latest</h2>
        <hr class="line">
        <section class="latest-container">
            <div>

                <?php
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
                            echo "</div>";
                    }
                ?>
            </div>    
        </section>
        <h2 class="subtitle">Best Sellers</h2>
        <hr class="line">
        <section class="latest-container">
            <?php
                    foreach($featured_items as $item){
                        
                        echo "<div class='showned-dish-container'>";
                            echo "<p class='number-container'>".$item["isFeatured"]."</p>";
                            echo "<div>";
                                echo "<img class='img' src='./imgs/".$item["dish_image"]."' alt='".$item["dish_name"]."'>";
                            echo "</div>";
                            echo "<section class='information-container'>";
                                echo "<h3 class='sub-sub-title'>".$item["dish_name"]."</h3>";
                                echo "<div class='categories-and-servers'>";
                                    echo "<h4>".$item["id_category"]."</h4>";
                                    echo "<h4>".$item["id_quantity"]."</h4>";
                                echo "</div>";
                                echo "<p class='regular-text'>".substr($item["dish_description"], 0, 60)."...</p>";
                                echo "<a class='btn-prices btn-base' href='details.php?id=".$item["id_dish"]."'>$".$item["dish_price"]." || Order Now</a>";
                            echo "</section>";
                        echo "</div>";
                        }
            ?>
            
            
            
        </section>
    </main>
    <?php
        include "./parts/footer.php";
    ?>
</body>
</html>