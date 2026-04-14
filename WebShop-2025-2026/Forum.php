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
NavigationBar("Forum");

if (isset($_POST["newMessage"])) {

    $message = $_POST["newMessage"];
    $username = $_SESSION["Username"];

    $sqlQuery = $connection->prepare(
        "INSERT INTO Messages (MessageText, Username) VALUES (?, ?);"
    );

    $sqlQuery->bind_param("ss", $message, $username);
    $sqlQuery->execute();
}
?>
<body>
  <h1 style="color: white;"><?= $arrayOfTranslations["ForumText"] ?></h1>
  <div id ="AllPreviousMessages">
    <?php 
    $sqlSelect = $connection->prepare("SELECT * FROM Messages;");
    $sqlSelect->execute();
    $result = $sqlSelect->get_result();
    while ($row = $result->fetch_assoc()) {
        ?>
        <br>
            User <?= htmlspecialchars($row["User"]) ?> wrote: <?= htmlspecialchars($row["MessageText"]) ?>
        <?php
    }
    ?>
  </div>
  <div id="NewMessage" style="color: white;">
    <h2><?= $arrayOfTranslations["NewMessage"] ?></h2>
    <form method="post">
        <input type="text" name="newMessage" placeholder="<?= $arrayOfTranslations["NewMessage"] ?>" required>
        <button type="submit" name ="SendMessage" value="SendMessage"><?= $arrayOfTranslations["SendMessage"] ?></button>
    </form>
  </div>
</body>

</html>