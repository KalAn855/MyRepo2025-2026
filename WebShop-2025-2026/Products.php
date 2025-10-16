<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="ShopStyles.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once ("CommonCode.php");
    NavigationBar("Products");
    ?>
<div class="welcome" style="background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%); border-radius: 18px; box-shadow: 0 6px 24px rgba(60,72,100,0.12); padding: 48px 32px; margin: 48px auto 0 auto; max-width: 540px; text-align: center;">
    <h1 style="font-family: 'Segoe UI', Arial, sans-serif; font-size: 2.8rem; color: #3b3b5c; margin-bottom: 18px; letter-spacing: 1px;">
        These are our products:
    </h1>
</div>

<div class="shoes" style="display: flex; flex-wrap: wrap; gap: 24px; justify-content: center;">
    <?php
    $products = [
        ["img" => "Pictures/Shoe_1.webp", "alt" => "Air Jordan 7", "name" => "Air Jordan 7", "price" => "699£"],
        ["img" => "Pictures/Shoe_2.webp", "alt" => "Air Jordan 5", "name" => "Air Jordan 5", "price" => "349£"],
        ["img" => "Pictures/Shoe_3.jpg", "alt" => "Air Jordan 3", "name" => "Air Jordan 3", "price" => "199£"],
        ["img" => "Pictures/Shoe_4.jpg", "alt" => "Air Jordan 5", "name" => "Air Jordan 5", "price" => "799£"],
        ["img" => "Pictures/Shoe_5.webp", "alt" => "Air Jordan 7", "name" => "Air Jordan 7", "price" => "269£"],
        ["img" => "Pictures/Shoe_6.webp", "alt" => "Air Jordan 2", "name" => "Air Jordan 2", "price" => "169£"],
        ["img" => "Pictures/Shoe_7.png", "alt" => "Jordan running", "name" => "Jordan running", "price" => "267£"],
        ["img" => "Pictures/Shoe_8.jpg", "alt" => "Nike schube", "name" => "Nike schube", "price" => "139£"],
        ["img" => "Pictures/Shoe_9.webp", "alt" => "Nike low dunk 3", "name" => "Nike low dunk 3", "price" => "149£"],
        ["img" => "Pictures/Shoe_10.webp", "alt" => "Nike Cortez pink", "name" => "Nike Cortez pink", "price" => "199£"],
        ["img" => "Pictures/Shoe_11.webp", "alt" => "Nike DownShifter", "name" => "Nike DownShifter", "price" => "159£"],
        ["img" => "Pictures/Shoe_12.webp", "alt" => "Nike Lebron Witness", "name" => "Nike Lebron Witness", "price" => "249£"],
    ];

    foreach ($products as $product) {
        echo '<div style="flex: 0 0 220px; text-align: center;">';
        echo '<img src="' . $product["img"] . '" alt="' . $product["alt"] . '" style="width:200px;"><br>';
        echo $product["name"] . ' - ' . $product["price"] . '<br>';
        echo 'Size: ';
        echo '<select name="size">';
        for ($size = 38; $size <= 45; $size++) {
            echo '<option value="' . $size . '">' . $size . '</option>';
        }
        echo '</select>';
        echo '</div>';
    }
    ?>
</div>

</body>
</html>