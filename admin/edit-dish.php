<?php

    require_once '../database.php';

    // Reference: https://medoo.in/api/select
    $quantities = $database->select("tb_quantities","*");
 
    // Reference: https://medoo.in/api/select
    $categories = $database->select("tb_categories","*");
 
    $message = "";

     if($_GET){
        $item = $database->select("tb_dishes","*",[
            "id_dish" => $_GET["id"],
        ]);
     }

     if($_POST){

        $data = $database->select("tb_dishes","*", ["id_dish"=>$_POST["id"]]);

        if(isset($_FILES["dish_image"]) && $_FILES["dish_image"]["name"] != ""){

            $errors = [];
            $file_name = $_FILES["dish_image"]["name"];
            $file_size = $_FILES["dish_image"]["size"];
            $file_tmp = $_FILES["dish_image"]["tmp_name"];
            $file_type = $_FILES["dish_image"]["type"];
            $file_ext_arr = explode(".", $_FILES["dish_image"]["name"]);

            $file_ext = end($file_ext_arr);
            $img_ext = ["jpeg", "png", "jpg", "webp"];

            if(!in_array($file_ext, $img_ext)){
                $errors[] = "File type is not valid";
                $message = "File type is not valid";
            }

            if(empty($errors)){
                $filename = strtolower($_POST["dish_name"]);
                $filename = str_replace(',', '', $filename);
                $filename = str_replace('.', '', $filename);
                $filename = str_replace(' ', '-', $filename);
                $img = "location-".$filename.".".$file_ext;
                move_uploaded_file($file_tmp, "../imgs/".$img);

               
            }
        }else{
            $img = $data[0]["dish_Image"];
        }
        
        $database->update("tb_dishes",[
            "id_quantity"=> $_POST["dish_quantity"],
            "id_category"=>$_POST["dish_category"],
            "dish_name"=>$_POST["dish_name"],
            "dish_description"=>$_POST["dish_description"],
            "dish_image"=> $img,
            "dish_price"=>$_POST["dish_price"],
            "isFeatured"=>$_POST["isFeatured"],
            "dish_name_it"=>$_POST["dish_name_it"],
            "dish_description_it"=>$_POST["dish_description_it"]
        ],[
            "id_dish" => $_POST["id"]
        ]);

        header("location: list-dishes.php");
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dish</title>
    <link rel="stylesheet" href="../css/themes/admin.css">
</head>
<body>
    <div class="container">
        <h2>Edit Dish</h2>
        <?php 
            echo $message;
        ?>
        <form method="post" action="edit-dish.php" enctype="multipart/form-data">
            <div class="form-items">
                <label for="dish_name">Dish Name</label>
                <input id="dish_name" class="textfield" name="dish_name" type="text" value="<?php echo $item[0]["dish_name"] ?>">
            </div>
            <div class="form-items">
                <label for="dish_name_it">Dish Italian Name</label>
                <input id="dish_name_it" class="textfield" name="dish_name_it" type="text" value="<?php echo $item[0]["dish_name_it"] ?>">
            </div>
            <div class="form-items">
                <label for="dish_quantity">Dish Quantity</label>
                <select name="dish_quantity" id="dish_quantity">
                    <?php 
                        foreach($quantities as $quantity){
                            if($item[0]["id_quantity"] == $quantity["id_quantity"]){
                                echo "<option value='".$quantity["id_quantity"]."' selected>".$quantity["quantity_name"]."</option>";
                            }else{
                                echo "<option value='".$quantity["id_quantity"]."'>".$quantity["quantity_name"]."</option>";
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="form-items">
                <label for="dish_category">Dish Category</label>
                <select name="dish_category" id="dish_category">
                    <?php 
                        foreach($categories as $category){
                            if($item[0]["id_category"] == $category["id_category"]){
                                echo "<option value='".$category["id_category"]."' selected>".$category["category_name"]."</option>";
                            }else{
                                echo "<option value='".$category["id_category"]."'>".$category["category_name"]."</option>";
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="form-items">
                <label for="dish_description">Dish Description</label>
                <textarea id="dish_description" name="dish_description" id="" cols="30" rows="10"><?php echo $item[0]["dish_description"]; ?></textarea>
            </div>
            <div class="form-items">
                <label for="dish_description_it">Dish Italian Description</label>
                <textarea id="dish_description_it" name="dish_description_it" id="" cols="30" rows="10"><?php echo $item[0]["dish_description_it"]; ?></textarea>
            </div>
            <div class="form-items">
                <label for="dish_image">Dish Image</label>
                <img id="preview" src="../imgs/<?php echo  $item[0]["dish_image"] ?>" alt="Preview">
                <input id="dish_image" type="file" name="dish_image" onchange="readURL(this)">
            </div>
            <div class="form-items">
                <label for="isFeatured">Dish Popular</label>
                <input id="isFeatured" class="textfield" name="isFeatured" type="text" value="<?php echo $item[0]["isFeatured"] ?>">
            </div>
            <div class="form-items">
                <label for="dish_price">Destination Price</label>
                <input id="dish_price" class="textfield" name="dish_price" type="text" value="<?php echo $item[0]["dish_price"] ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $item[0]["id_dish"]; ?>">
            <div class="form-items">
                <input class="submit-btn" type="submit" value="Update Dish">
            </div>
        </form>
    </div>

    <script>
        function readURL(input) {
            if(input.files && input.files[0]){
                let reader = new FileReader();

                reader.onload = function(e) {
                    let preview = document.getElementById('preview').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        
    </script>
    
</body>
</html>