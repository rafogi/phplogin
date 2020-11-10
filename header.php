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
<body>
<nav class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="characters.php">Characters</a>
  <a href="contact.php">Contact</a>
  <a href="about.php">About</a>
  <?php
    if (isset($_SESSION["useruid"])) {
        echo "<a href='profile.php'>Profile Page</a>";
        echo "<li><a href='logout.php'>Logout</a>";
    }
    else {
        echo "<a href='signup.php'>Sign up</a>";
        echo "<a href='login.php'>Log in</a>";
    }
  ?>
</nav>