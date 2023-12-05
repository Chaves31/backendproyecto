<?php
    require_once './database.php';

    $link = "";
    $url_params = "";
    $lang = "";

    if($_GET){
        if(isset($_GET["lang"]) && $_GET["lang"] == "it"){
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
                "tb_dishes.dish_name_it",
                "tb_dishes.dish_description_it",
                "tb_dishes.dish_image",
                "tb_dishes.dish_price",
                "tb_categories.category_name",
                "tb_quantities.quantity_name",
            ],[
                "id_dish"=>$_GET["id"]
            ]);

            $item[0]["dish_name"] = $item[0]["dish_name_it"];
            $item[0]["dish_description"] = $item[0]["dish_description_it"];

            $url_params = "id=".$item[0]["id_dish"];
            $lang = "EN";
        }else{
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
                "id_dish"=>$_GET["id"]
            ]);

            $url_params = "id=".$item[0]["id_dish"]."&lang=it";
            $lang = "IT";
        }

        
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
                    echo "<span class='translate-btn' type='submit' id='lang' onclick='getTranslation(".$item[0]["id_dish"].")'><img class='icons' src='./imgs/icons/translate.svg' alt='Translate'>IT</span>";
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
                    echo "<div class='btn-cart-container'>";
                        echo "<a class='btn-cart btn-base' href='cart.php?id=".$item[0]["id_dish"]."'> <img class='shopping-cart-icon' src='./imgs/icons//shopping-cart.svg' alt='Shopping Cart'> Add to cart</a>";
                    echo "</div>";
                echo "</section>";
            ?>
            
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
    <?php
        include "./parts/footer.php";
    ?>

    <script>

    let requestLang = "it";

    function switchLang(){
        if(requestLang == "en") requestLang = "it";
        else requestLang = "en";
        document.getElementById("lang").innerText = requestLang;
    }

    function getTranslation(id){

        let info = {
            id_dish: id,
            language: requestLang
        };

        //fetch
        fetch("http://localhost/backendproyecto/language.php",{
            method: "POST",
            mode: "same-origin",
            credentials: "same-origin",
            headers:{
                'Accept': 'application/json, text/plain, */*',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(info)
        })
        .then(response => response.json())
        .then(data => {

            switchLang();
            document.getElementById("dish-name").innerText = data.name;
            document.getElementById("dish-description").innerText = data.description;
        })
        .catch(err => console.log("error: " + err));
    }
    </script>
</body>
</html>