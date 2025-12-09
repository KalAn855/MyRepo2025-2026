<?php
include_once("CommonCode.php");

if (!isset($_SESSION["UserLogged"]) || $_SESSION["UserLogged"] !== true ||
    $_SESSION["Admin"] !== "yes") {
    header("Location: Login.php");
    exit();
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nameEN = trim($_POST["nameEN"]);
    $nameRU = trim($_POST["nameRU"]);
    $image  = trim($_POST["image"]);
    $extra  = trim($_POST["extra"]);
    $descEN = trim($_POST["descEN"]);
    $descRU = trim($_POST["descRU"]);

    if ($nameEN !== "" && $nameRU !== "" && $image !== "" && $extra !== "") {

        $file = fopen("Products.csv", "a");
        fwrite($file, 
            "\n$nameEN;$image;$extra;$descEN;$descRU;$nameRU"
        );
        fclose($file);

        $message = "Product created successfully!";
    } else {
        $message = "Please fill all required fields!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="ShopStyles.css?v=<?php echo time(); ?>">
    <title>Admin Panel</title>

    <script>
        function validateForm() {
            let requiredFields = ["nameEN", "nameRU", "image", "extra"];
            for (let field of requiredFields) {
                if (document.getElementById(field).value.trim() === "") {
                    alert("Please fill all required fields!");
                    return false;
                }
            }
            return true;
        }
    </script>
</head>

<body>

<?php NavigationBar($arrayOfTranslations["AdminBtn"]); ?>

<div class="adminBox">
    <h1><?= $arrayOfTranslations["AdminBtn"] ?></h1>
    <p><?= $arrayOfTranslations["WelcomeText"] ?> <?= $_SESSION["Username"] ?> <?= $arrayOfTranslations["Admin"] ?></p>

    <?php if ($message !== ""): ?>
        <div class="message"><?= $message ?></div>
    <?php endif; ?>

    <h2><?= $arrayOfTranslations["CreateBtn"] ?></h2>

    <form method="POST" onsubmit="return validateForm();">

        <label><?= $arrayOfTranslations["NameTextEn"] ?>*</label>
        <input type="text" id="nameEN" name="nameEN">

        <label><?= $arrayOfTranslations["NameTextRu"] ?>*</label>
        <input type="text" id="nameRU" name="nameRU">

        <label><?= $arrayOfTranslations["FileName"] ?>*</label>
        <input type="text" id="image" name="image">

        <label><?= $arrayOfTranslations["Price"] ?>*</label>
        <input type="text" id="extra" name="extra">

        <label><?= $arrayOfTranslations["DescEN"] ?></label>
        <textarea name="descEN"></textarea>

        <label><?= $arrayOfTranslations["DescRU"] ?></label>
        <textarea name="descRU"></textarea>

        <button class="btn" type="submit"><?= $arrayOfTranslations["CreateBtn"] ?></button>
    </form>
</div>

</body>
</html>
