<?php
$language = "english";
if (isset($_GET["lang"])) {
    $language = $_GET["lang"];
}

//print("The current language is: " . $language . "<br>");

$arrayOfTranslations = [];

$fileTranslation = fopen("Translation.csv", "r");
while(!feof($fileTranslation)) {
    $lineFromFile = fgets($fileTranslation);
    $piecesOfTranslation = explode(";", $lineFromFile);
    //$arrayOfTranslations[$piecesOfTranslation[0]] = ($language == "english") ? $piecesOfTranslation[1] : $piecesOfTranslation[2];
    if ($language == "english") {
        $arrayOfTranslations[$piecesOfTranslation[0]] = $piecesOfTranslation[1];
    } else {
        $arrayOfTranslations[$piecesOfTranslation[0]] = $piecesOfTranslation[2];
    }
}
//var_dump($arrayOfTranslations);

function NavigationBar($current)
{
    global $language;
    global $arrayOfTranslations;
    $navigationBarLinks = [
        $arrayOfTranslations["HomeBtn"] => "Home.php",
         $arrayOfTranslations["ContactBtn"] => "Contact.php",
         $arrayOfTranslations["ProductBtn"] => "Products.php",
         $arrayOfTranslations["RegisterBtn"] => "Register.php",
    ]
?>
    <div class="navBar">
        <?php
        foreach ($navigationBarLinks as $keyVariable => $valueVariable) {
        ?>
            <a <?= ($current == $keyVariable) ? 'class="active"' : ''; ?> href="<?= $valueVariable ?>?lang=<?= $language?>" class="navLink"><?= $keyVariable ?></a>
        <?php
        }
        ?>
        <form>
            <select name= lang onchange="this.form.submit()">
            <option value="english" <?php if ($language == "english") print "selected"; ?>>English</option>
            <option value="russian" <?php if ($language == "russian") print "selected"; ?>>Russian</option>
            </select>
        </form>
    </div>
<?php
}
 


function userAlredyResgistred($checkedUser) {
    /* this function checks if $chekedUser string is an existing user in client.csv
    if the given user is alredy in the file we return true -> user alredy exists
    if not we return false*/
    $bReturnValue = false;
    $fHandler = fopen("Client.csv", "r");
    while (!feof($fHandler)){
        $newLine = fgets($fHandler);
        $items = explode(";", $newLine);
        if ($items[0] == $checkedUser) {
            $bReturnValue = true;
        }
    }
    fclose($fHandler);
    return $bReturnValue;
}
 