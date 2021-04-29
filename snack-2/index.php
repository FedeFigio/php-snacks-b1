<head>
    <link rel="stylesheet" href="./master.css">
</head>
<?php
$getName = $_GET['name'];
$getAge = $_GET['age'];
$getEmail = $_GET['mail'];

$flagMail = false;
$flagAge = false;
$flagName = false;

if (filter_var($getEmail, FILTER_VALIDATE_EMAIL) && strpos($getEmail, '@') && strpos($getEmail, '.')) {
    $flagMail = true;
}
if (is_numeric($getAge)) {
    $flagAge = true;
}
if (strlen($getName) > 3) {
    $flagName = true;
}
if (
    $flagMail && $flagAge && $flagName
) { ?>
    <p> Accesso riuscito</p>
    <?php
} else {
    if (!filter_var($getEmail, FILTER_VALIDATE_EMAIL) || !strpos($getEmail, '@') || !strpos($getEmail, '.')) {
    ?>
        <p>L' E-mail non e corretta</p>
    <?php
    }
    if (strlen($getName) < 3) {
    ?>
        <p>Il nome deve contenere almeno 3 lettere</p>
    <?php
    }
    if (!is_numeric($getAge)) {
    ?>
        <p>L'eta deve essere un numero</p>
<?php
    }
}
?>