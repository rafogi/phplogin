<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<nav class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="characters.php">Characters</a>
  <a href="about.php">About</a>
  <?php
    if (isset($_SESSION["useruid"])) {
        echo "<a href='logout.php'>Logout</a>";
        echo "<a href='addChar.php'>Add a character</a>";
        echo "<p style='float: right; color:white; margin-right:2em;'>Hello " .$_SESSION["useruid"] . "</p>";
    }
    else {
        echo "<a href='signup.php'>Sign up</a>";
        echo "<a href='login.php'>Log in</a>";
    }
  ?>
</nav>
<body>