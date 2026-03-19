<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="ShopStyles.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    include_once("Database.php");
    include_once("CommonCode.php");
    NavigationBar("Cart.php");
?>
<body>
<?php
?>
    <!-- Cart Container -->
<div class="welcome divCentered">
<h1 class="cartTitle"><?= $arrayOfTranslations["CartTitle"] ?></h1>
<p class="cartSubtitle"><?= $arrayOfTranslations["CartSubtitle"] ?></p>

        <!-- Items will be inserted here later -->
<table>
    <tr>
        <th>Item</th>
        <th>Quantity</th>
    </tr>
<?php
foreach($_SESSION["Cart"] as $itemid => $itemQuantity) {
    $sqlQuery = $connection->prepare("SELECT * FROM products WHERE id = ?;");
    $sqlQuery->bind_param("i", $itemid);
    $sqlQuery->execute();
    $result = $sqlQuery->get_result();
    $product = $result->fetch_assoc();
    ?>  
    <tr>
        <td><?= $product["ProductNameEN"] ?></td>
        <td><?= $itemQuantity ?></td>
    </tr>
         <?php
}
?>
</table>
 
        <!-- Summary -->
<div class="cartSummary">
<h2><?= $arrayOfTranslations["Total"] ?>: €0.00</h2>
<button class="checkoutBtn"><?= $arrayOfTranslations["Checkout"] ?></button>
</div>
</div>
</body>
</html>