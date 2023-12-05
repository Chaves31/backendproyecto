<?php 

    require_once '../database.php';

    // Reference: https://medoo.in/api/select
    $quantities = $database->select("tb_quantities","*");

    // Reference: https://medoo.in/api/select
    $categories = $database->select("tb_categories","*");

    $message = "";

    if($_POST){

        if(isset($_FILES["dish_image"])){
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

                $database->insert("tb_dishes",[
                    "id_quantity"=> $_POST["dish_quantity"],
                    "id_category"=>$_POST["dish_category"],
                    "dish_name"=>$_POST["dish_name"],
                    "dish_description"=>$_POST["dish_description"],
                    "dish_image"=> $img,
                    "dish_price"=>$_POST["dish_price"],
                    "isFeatured"=>$_POST["isFeatured"],
                    "dish_name_it"=>$_POST["dish_name_it"],
                    "dish_description_it"=>$_POST["dish_descriptioin_it"]
                ]);
            }
        }
        
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Dish</title>
    <link rel="stylesheet" href="../css/themes/admin.css">
</head>
<body>
    <div class="container">
        <h2>Add New Dish</h2>
        <?php 
            echo $message;
        ?>
        <form method="post" action="add-dish.php" enctype="multipart/form-data">
            <div class="form-items">
                <label for="dish_name">Dish Name</label>
                <input id="dish_name" class="textfield" name="dish_name" type="text">
            </div>
            <div class="form-items">
                <label for="dish_name_it">Dish Italian Name</label>
                <input id="dish_name_it" class="textfield" name="dish_name_it" type="text">
            </div>
            <div class="form-items">
                <label for="dish_quantity">Dish Quantity</label>
                <select name="dish_quantity" id="dish_quantity">
                    <?php 
                        foreach($quantities as $quantity){
                            echo "<option value='".$quantity["id_quantity"]."'>".$quantity["quantity_name"]."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-items">
                <label for="dish_category">Dish Category</label>
                <select name="dish_category" id="dish_category">
                    <?php 
                        foreach($categories as $category){
                            echo "<option value='".$category["id_category"]."'>".$category["category_name"]."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-items">
                <label for="dish_description">Dish Description</label>
                <textarea id="dish_description" name="dish_description" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-items">
                <label for="dish_description_it">Dish Italian Description</label>
                <textarea id="dish_description_it" name="dish_description_it" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-items">
                <label for="dish_image">Dish Image</label>
                <img id="preview" src="../imgs/dish-placeholder.webp" alt="Preview">
                <input id="dish_image" type="file" name="dish_image" onchange="readURL(this)">
            </div>
            <div class="form-items">
                <label for="isFeatured">Dish Popular</label>
                <input id="isFeatured" class="textfield" name="isFeatured" type="text">
            </div>
            <div class="form-items">
                <label for="dish_price">Dish Price</label>
                <input id="dish_price" class="textfield" name="dish_price" type="text">
            </div>
            <div class="form-items">
                <input class="submit-btn" type="submit" value="Add New Dish">
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
