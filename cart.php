<?php
    require_once './database.php';

    if($_GET){

        // Reference: https://medoo.in/api/where
        /*$item = $database->select("tb_dishes","*",[
            "id_dish"=>$_GET["id"]
        ]);*/

        // Reference: https://medoo.in/api/select
        // Note: don't delete the [>] Es el ineer join
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
            "tb_quantities.quantity_max_dishes",
        ],[
            "id_dish"=>$_GET["id"]
        ]);

        // Reference: https://medoo.in/api/select
        //$tours = $database->select("tb_destination_activities","*");
    }
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
    <?php
        include "./parts/header.php";
    ?>
    <main class="main-details-container">
        <div class="full-width details-section">
            <?php
                echo "<div class='details-img-container'>";
                    echo "<button class='translate-btn' type='submit'><img class='icons' src='./imgs/icons/translate.svg' alt='Translate'></button>";
                    echo "<img class='img' src='./imgs/".$item[0]["dish_image"]."' alt='".$item[0]["dish_name"]."'>";
                echo "</div>";
                echo "<section class='full-width'>";
                    echo "<h3 class='sub-sub-title'>".$item[0]["dish_name"]."</h3>";
                    echo "<div class='categories-and-servers'>";
                        echo "<h4>".$item[0]["category_name"]."</h4>";
                        echo "<h4>".$item[0]["quantity_name"]."</h4>";
                    echo "</div>";
                    echo "<p class='regular-text'>".$item[0]["dish_description"]."</p>";
                    echo "<h4 class='regular-text medium-text margin-none'>Ready to Order?</h4>";
                    echo "<p class='regular-text'>Remember that we offer three ordering methods:</p>";
                    echo "<ul class='list-ordering-methods regular-text'>";
                        echo "<li class='ordering-methods-list'>Room</li>";
                        echo "<li class='ordering-methods-list'>Express</li>";
                        echo "<li class='ordering-methods-list'>Drop into take away</li>";
                    echo "</ul>";
                    echo "<p class='regular-text margin-none'>Price</p>";
                    echo "<p class='price-text'>$".$item[0]["dish_price"]."/p>";
                echo "</section>";
            ?>
            
        </div>
        <aside class="recommendations-aside">
            <?php
                echo "<div class='activity'>";
                    echo "<form class='form-container' action='confirmation.php' method='post'>"
                        ."<h3 class='subtitle margin-none'>Order</h3>"
                        ."<div class='form-items'>"
                            ."<div>"
                                ."<label class='sub-sub-title' for='checkin'>Check-In</label>"
                            ."</div>"
                            ."<div>"
                                ."<input id='checkin' class='form-input' class='form-input' type='date' name='checkin' min='' max='2024-06-30'>"
                            ."</div>"
                        ."</div>"
                        ."<div class='form-items'>"
                            ."<div>"
                                ."<label class='sub-sub-title' for='dishes'>Number of dishes</label>"
                            ."</div>"
                            ."<div>"
                                ."<input id='dishes' class='form-input' type='number' name='dishes' min='1' max='".$item[0]["quantity_max_dishes"]."' value='1'>"
                            ."</div>"
                        ."</div>";
                        echo "<input type='hidden' name='id_dish' value='".$item[0]["id_dish"]."'>";
                            echo "<input type='hidden' id='dish_price' value='".$item[0]["dish_price"]."'>";
                            echo "<input type='submit' class='btn-cart btn-base' value='Add Order'>";
                    echo "</form>";
                    echo "<h3 class='sub-sub-title'>Total: $<span id='total'></span></h3>";
                    
                echo "</div>"
            ?>
        </aside>
    </main>
    <?php
        include "./parts/footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/luxon@3.4.3/build/global/luxon.min.js"></script>
    <script>
        
        let total = 0;
        let dish_price = document.getElementById("dish_price").value;

        let DateTime = luxon.DateTime;

        function updateTotal(){
            total = (dish_price * dishes.value);
            document.getElementById("total").innerHTML = total;
        }

        document.addEventListener("DOMContentLoaded", function(){
            const now = DateTime.now();
            let currentDate = now.year+"-"+now.month+"-"+now.day;

            let checkin = document.getElementById("checkin");
            checkin.setAttribute("min", currentDate);
            checkin.setAttribute("value", currentDate);

            let dishes = document.getElementById("dishes");
            
            checkin.addEventListener("change", function(){
                updateTotal();
            });

            dishes.addEventListener("change", function(){
                updateTotal();
            });

            updateTotal();

        });

    </script>
</body>
</html>