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
    $_POST["newMessage"] = 
    $sqlQuery = $connection->prepare("INSERT INTO Messages (MessageText, Username) VALUES (?, ?);");
    $sqlQuery->bind_param("ss", $_POST["newMessage"], $_SESSION["Username"]);
    $sqlQuery->execute();
}
?>
<body>
  <h1 style="color: white;">Forum</h1>
  <div id ="AllPreviousMessages">
    <?php 
    $sqlSelect = $connection->prepare("SELECT * FROM Messages;");
    $sqlSelect->execute();
    $result = $sqlSelect->get_result();
    while ($row = $result->fetch_assoc()) {
        ?>
        <br>
            User <?= $row["Username"] ?> wrote: <?= $row["MessageText"] ?>
        <?php
    }
    ?>
  </div>
  <div id="NewMessage" style="color: white;">
    <h2>Post a new message</h2>
    <form method="post">
        <input type="text" name="newMessage" placeholder="Your message here..." required>
        <button type="submit" value="SendMessage">Send</button>
    </form>
  </div>
</body>

</html>