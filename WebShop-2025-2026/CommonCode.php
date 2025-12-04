<?php

session_start();
var_dump($_SESSION);
if (isset($_POST["logout"])) {
    session_unset();
    session_destroy();
    session_start();
}



if (!isset($_SESSION["UserLogged"])) {
    $_SESSION["UserLogged"] = false;
}


$language = isset($_GET["lang"]) ? $_GET["lang"] : "english";
$arrayOfTranslations = [];
$fileTranslation = fopen("Translation.csv", "r");
while (($line = fgets($fileTranslation)) !== false) {
    $line = trim($line);
    if ($line === "") continue;
    $parts = explode(";", $line);
    if (count($parts) < 3) continue;
    $key = $parts[0];
    $arrayOfTranslations[$key] = ($language === "english")
        ? $parts[1]
        : $parts[2];
}

fclose($fileTranslation);
function NavigationBar($currentPage)
{
    global $arrayOfTranslations, $language;
?>
    <div class="navBar">
        <a href="Home.php?lang=<?= $language ?>"
            <?= ($currentPage === $arrayOfTranslations["HomeBtn"]) ? "class='highlight'" : "" ?>>
            <?= $arrayOfTranslations["HomeBtn"] ?>
        </a>

        <a href="Contact.php?lang=<?= $language ?>"
            <?= ($currentPage === $arrayOfTranslations["ContactBtn"]) ? "class='highlight'" : "" ?>>
            <?= $arrayOfTranslations["ContactBtn"] ?>
        </a>

        <a href="Products.php?lang=<?= $language ?>"
            <?= ($currentPage === $arrayOfTranslations["ProductBtn"]) ? "class='highlight'" : "" ?>>
            <?= $arrayOfTranslations["ProductBtn"] ?>
        </a>

        <a href="Register.php?lang=<?= $language ?>"
            <?= ($currentPage === $arrayOfTranslations["RegisterBtn"]) ? "class='highlight'" : "" ?>>
            <?= $arrayOfTranslations["RegisterBtn"] ?>
        </a>

        <?php if (!$_SESSION["UserLogged"]) : ?>
            <a href="Login.php?lang=<?= $language ?>"
                <?= ($currentPage === $arrayOfTranslations["LoginBtn"]) ? "class='highlight'" : "" ?>>
                <?= $arrayOfTranslations["LoginBtn"] ?>
            </a>
        <?php else : ?>
            <span>Welcome, <?= $_SESSION["Username"] ?>!</span>
        <?php endif; ?>

        <!-- Language selector -->
        <form method="get" class="langForm" style="display:inline-block; margin-left:20px;">
            <select name="lang" onchange="this.form.submit()">
                <option value="english" <?= ($language == "english") ? "selected" : "" ?>>English</option>
                <option value="russian" <?= ($language == "russian") ? "selected" : "" ?>>Russian</option>
            </select>
        </form>

    </div>
<?php

}



function verifyUserCredentials($checkedUser, $checkedPsw)

{

    $fHandler = @fopen("Client.csv", "r");
    if (!$fHandler) return false;
    while (($line = fgets($fHandler)) !== false) {
        $line = trim($line);
        if ($line === "") continue;
        $items = explode(";", $line);
        if (strtolower($items[0]) === "username") continue; 
        $fileUser = trim($items[0] ?? "");
        $filePsw = trim($items[1] ?? "");
        if ($fileUser === $checkedUser && password_verify($checkedPsw, $filePsw)) {
            fclose($fHandler);
            return true;
        }
    }
    fclose($fHandler);
    return false;
}

function userAlreadyRegistered($checkedUser)
{

    $fHandler = @fopen("Client.csv", "r");
    if (!$fHandler) return false;
    while (($line = fgets($fHandler)) !== false) {
        $items = explode(";", trim($line));
        if ($items[0] === $checkedUser) {
            fclose($fHandler);
            return true;
        }
    }
    fclose($fHandler);
    return false;
}

?>