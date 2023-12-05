<?php

    require_once './database.php';
    
    if($_POST){

        //var_dump($_POST);
        $total_payment = 0;

        $cart = [];
        
        // Reference: https://medoo.in/api/select
        // Note: don't delete the [>] 
        $item = $database->select("tb_dishes",[
            "[>]tb_categories"=>["id_category" => "id_category"],
            "[>]tb_quantities"=>["id_quantity" => "id_quantity"]
        ],[
            "tb_dishes.id_dish",
            "tb_dishes.dish_name",
            "tb_dishes.dish_description",
            "tb_dishes.dish_image",
            "tb_dishes.dish_price",
            "tb_categories.category_name",
            "tb_quantities.quantity_name",
        ],[
            "id_dish"=>$_POST["id_dish"]
        ]);


        //insert into tb_reservation
        // Reference: https://medoo.in/api/insert
        $database->insert("tb_orders",[
            "order_date"=> $_POST["checkin"],
            "dishes"=> $_POST["dishes"]
        ]);

        
        //get reservation ID
        $id_order = $database->id();

        

        
        $total_payment = ($item[0]["dish_price"] * $_POST["dishes"]);
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
    <?php
        include "./parts/banner.php";
    ?>
    <main>
        <section class="categories-begin">
                <?php
                    echo "<div class='showned-dish-container'>";
                        echo "<div>";
                            echo "<img class='img' src='./imgs/".$item[0]["dish_image"]."' alt='".$item[0]["dish_name"]."'>";
                        echo "</div>";
                        echo "<section class='information-container'>";
                            echo "<h3 class='sub-sub-title'>".$item[0]["dish_name"]."</h3>";
                            echo "<p class='regular-text'>".$item[0]["dish_description"]."</p>";
                            echo "<div class='categories-and-servers-confirmation'>";
                                echo "<h4>".$item[0]["category_name"]."</h4>";
                                echo "<h4>".$item[0]["quantity_name"]."</h4>";
                            echo "</div>";
                            echo "<p class='regular-text-confirmation'>$".$item[0]["dish_price"]."</p>";
                            echo "<p class='regular-text-confirmation'>CheckIn: ".$_POST["checkin"]."</p>";
                            echo "<p class='regular-text-confirmation'>Dishes: ".$_POST["dishes"]."</p>";
                            echo "<p class='regular-text-confirmation'>Total payment: $".$total_payment."</p>";
                        echo "</section>";
                    echo "</div>";
                    
                    
                        
                ?>
        </section>
    </main>
    <?php
        include "./parts/footer.php";
    ?>
</body>
</html>