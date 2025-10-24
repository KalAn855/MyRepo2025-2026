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
    NavigationBar("Register");
    ?>
    <?php
    $bShowForm = true;
    if (isset($_POST["userName"], $_POST["psw"], $_POST["pswAgain"])) {
        $bShowForm = false;
        print ("Registration in progress...<br>");
        //check if passwords match
        if (($_POST["psw"] == $_POST["pswAgain"]) && (!userAlredyResgistred($_POST["userName"]))) {
            print ("Welcome you are now registered!");
            //we need to save the username and password into the "database"(Client.csv)
            $fHandler = fopen("Client.csv", "a");
            
            fwrite($fHandler, "\n" . $_POST["userName"] . ";" . $_POST["psw"]);
            fclose($fHandler);
        } else {
            $bShowForm = true;
            print ("Passwords do not match or user alredy exists, please try again.");
        }
    }
    if ($bShowForm) {
    ?>
    <form method="POST" class="divCentered">
        <h1 class ="fonth1">Registration form</h1>
        <p class ="fontp">Choose an User Name</div><br>
        <input type="test" name="userName"><br>
        <p class ="fontp">Choose a password</div><br>
        <input type="password" name="psw"><br>
        <input type="password" name="pswAgain"><br>
        <input type="submit" value="Register">
    </form>
    <?php
    }
    ?>
</body>
</html>