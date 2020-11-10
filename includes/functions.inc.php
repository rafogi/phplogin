<?php

function emptyInputSignup($name, $email, $userName, $pwd, $pwdRepeat) {
    $result;
    if (empty($name) || empty($email) || empty($userName) || empty($pwd) || empty($pwdRepeat))  {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($userName) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/"), $userName) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExist($conn, $userName, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=empty=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $userName, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $userName, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd,) VALUES ();";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=empty=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $userName, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}