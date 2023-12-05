<?php 
    require_once './database.php';

    $dish = [];

    if(isset($_SERVER["CONTENT_TYPE"])){
        $contentType = $_SERVER["CONTENT_TYPE"];

        if($contentType == "application/json"){
            $content = trim(file_get_contents("php://input"));

            $decoded = json_decode($content, true);

            $response = "server response";
            //echo json_encode($decoded["language"]);

            if($decoded["language"] == 'en'){
                $item = $database->select("tb_dishes", [
                    "tb_dishes.dish_name",
                    "tb_dishes.dish_description"
                ],[
                    "id_dish"=>$decoded["id_dish"]
                ]);

                $dish["name"] = $item[0]["dish_name"];
                $dish["description"] = $item[0]["dish_description"];

            }else{
                $item = $database->select("tb_dishes", [
                    "tb_dishes.dish_name_it",
                    "tb_dishes.dish_description_it"
                ],[
                    "id_dish"=>$decoded["id_dish"]
                ]);

                $dish["name"] = $item[0]["dish_name_it"];
                $dish["description"] = $item[0]["dish_description_it"];

            }
            
            echo json_encode($dish);

        }
    }

?>