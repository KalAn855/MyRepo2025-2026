<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="ShopStyles.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    TEST THIS
    <?php
    include_once("CommonCode.php");
    NavigationBar("Products");
    ?>
    <div class="welcome divCentered">
        <h1 style="font-family: 'Segoe UI', Arial, sans-serif; font-size: 2.8rem; color: #3b3b5c; margin-bottom: 18px; letter-spacing: 1px;">
            These are our products:
        </h1>
    </div>

    <div class="shoes">
        <div class="OneShoe">
            <div>Air Jordan 7</div>
            <img src="./Pictures/Shoe_1.webp" alt="Air Jordan 7" class="shoeImage">
            <div>699£</div>
            <div>They are stylish and iconic.</div>
        </div>
        <div class="OneShoe">
            <div>Air Jordan 5</div>
            <img src="./Pictures/Shoe_2.webp" alt="Air Jordan 5" class="shoeImage">
            <div>349£</div>
            <div>They are stylish and iconic.</div>
        </div>

        <div class="OneShoe">
            <div>Air Jordan 3</div>
            <img src="./Pictures/Shoe_3.jpg" alt="Air Jordan 3" class="shoeImage">
            <div>199£</div>
            <div>They are stylish and iconic.</div>
        </div>

        <div class="OneShoe">
            <div>Air Jordan 5</div>
            <img src="./Pictures/Shoe_4.jpg" alt="Air Jordan 5" class="shoeImage">
            <div>799£</div>
            <div>They are stylish and iconic.</div>
        </div>

        <div class="OneShoe">
            <div>Air Jordan 7</div>
            <img src="./Pictures/Shoe_5.webp" alt="Air Jordan 7" class="shoeImage">
            <div>269£</div>
            <div>They are stylish and iconic.</div>
        </div>

        <div class="OneShoe">
            <div>Air Jordan 2</div>
            <img src="./Pictures/Shoe_6.webp" alt="Air Jordan 2" class="shoeImage">
            <div>169£</div>
            <div>They are stylish and iconic.</div>
        </div>

        <div class="OneShoe">
            <div>Jordan running</div>
            <img src="./Pictures/Shoe_7.png" alt="Jordan running" class="shoeImage">
            <div>267£</div>
            <div>They are stylish and iconic.</div>
        </div>

        <div class="OneShoe">

            <div>Nike schube</div>
            <img src="./Pictures/Shoe_8.jpg" alt="Nike schube" class="shoeImage">
            <div>139£</div>
            <div>They are stylish and iconic.</div>
        </div>

        <div class="OneShoe">

            <div>Nike low dunk 3</div>
            <img src="./Pictures/Shoe_9.webp" alt="Nike low dunk 3" class="shoeImage">
            <div>149£</div>
            <div>They are stylish and iconic.</div>
        </div>

        <div class="OneShoe">

            <div>Nike Cortez pink</div>
            <img src="./Pictures/Shoe_10.webp" alt="Nike Cortez pink" class="shoeImage">
            <div>199£</div>
            <div>They are stylish and iconic.</div>
        </div>

        <div class="OneShoe">

            <div>Nike DownShifter</div>
            <img src="./Pictures/Shoe_11.webp" alt="Nike DownShifter" class="shoeImage">
            <div>159£</div>
            <div>They are stylish and iconic.</div>
        </div>

        <div class="OneShoe">

            <div>Nike Lebron Witness</div>
            <img src="./Pictures/Shoe_12.webp" alt="Nike Lebron Witness" class="shoeImage">
            <div>249£</div>
            <div>They are stylish and iconic.</div>
        </div>

    </div>

</body>

</html>