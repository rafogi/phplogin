<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $image = $_POST["image"];
    $race = $_POST["race"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputAddChar($name, $description, $image, $race) !== false ) {
        header("location: ../addChar.php?error=emptyinput");
        exit();
    }
    if (charExists($conn, $name) !== false ) {
        header("location: ../addChar.php?error=characternametaken");
        exit();
    }

    createCharacter($conn, $name, $description, $image, $race);
}
else {
    header("location: ../index.php");
    exit();
}
