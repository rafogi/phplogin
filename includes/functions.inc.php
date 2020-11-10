<?php

function emptyInputSignup($name, $email, $userName, $pwd, $pwdRepeat) {
    $result;
    if (empty($name) || empty($email) || empty($userName) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($userName) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
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

function uidExists($conn, $userName, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
           header("location: ../signup.php?error=stmtfailed");
          exit();
      }
  
      mysqli_stmt_bind_param($stmt, "ss", $username, $email);
      mysqli_stmt_execute($stmt);
  
      // "Get result" returns the results from a prepared statement
      $resultData = mysqli_stmt_get_result($stmt);
  
      if ($row = mysqli_fetch_assoc($resultData)) {
          return $row;
      }
      else {
          $result = false;
          return $result;
      }
  
      mysqli_stmt_close($stmt);
  }

function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
  
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
           header("location: ../signup.php?error=stmtfailed");
          exit();
      }
  
      $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
  
      mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      mysqli_close($conn);
      header("location: ../signup.php?error=none");
      exit();
  }

  function emptyInputLogin($userName, $pwd) {
    $result;
    if (empty($userName) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $userName, $pwd) {
    $uidExists = uidExists($conn, $userName, $email);

    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    $pwdHashed = $uidExists['usersPwd'];
    $checkPwd = password_verify($pwd, $pwdHashed);
    if (checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../index.php");
        exit();
    }
}