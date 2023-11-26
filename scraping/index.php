<?php
    require_once '../database.php';

    include('simple_html_dom.php');

    $link = "https://www.allrecipes.com/recipes/1789/world-cuisine/european/italian/authentic/";

    $filenames = [];
    $dish_name = [];
    $dish_description = [];
    $image_link = [];

    $dish_items = 9;

    $items = file_get_html($link);

    foreach ($items->find('.card--no-image') as $item){

        $name = $item->find('.card__title-text');

        $details = file_get_html($item->href);
        $description = $details->find('.article-subheading');
        $image = $details->find('.primary-image__image');

        if(count($image) > 0){
            $image_link[] = $image[0]->src;
        }else{
            $replace_img = $item->find('.universal-image__image');
            if(count($replace_img) > 0){
                $image_link[] = $replace_img[0]->{'data-src'};
            }
        }

        if(count($description) > 0){
            if($dish_items == 0) break;

            $dish_name[] = trim($name[0]->plaintext);
            $dish_description[] = $description[0]->plaintext;

            $filename = strtolower(trim($name[0]->plaintext));
            $filename = str_replace(' ', '-', $filename);
            $filenames[] = $filename;

            $dish_items--;
        }

    }

    foreach($filenames as $index=>$image){
        echo "******************";
        echo "<br>";
        echo $item;
        echo "<br>";
        echo $dish_name[$index];
        echo "<br>";
        echo $dish_description[$index];
        echo "<br>";
        echo $image_link[$index];
        echo "<br>";
        
        //$menu_items--;
        //if($menu_items == 0) break;
    }

    foreach ($filenames as $index=>$image){
        file_put_contents("./imgs/".$image.".jpg", file_get_contents($image_link[$index]));
    }

    for($i=0; $i<9; $i++){
        // Reference: https://medoo.in/api/insert
        $database->insert("tb_dishes",[
            "dish_name"=> $dish_name[$i],
            "dish_image"=> $filenames[$i] . ".jpg",
            "dish_description"=> $dish_description[$i],
            "dish_price"=> rand(1 * 10, 70 * 10) / 10,
        ]);
    }

?>
