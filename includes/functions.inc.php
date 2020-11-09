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