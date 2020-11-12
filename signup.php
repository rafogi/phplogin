<?php
  include_once 'header.php';
?>
<link rel="stylesheet" href="signup.css">
<section class="signup-form">
  <h1 style='margin-top:2em'>Sign up</h1>

 
  <form action="includes/signup.inc.php" method="post" class= "sign-container">
    <input class="signIp" type="text" name="name" placeholder="enter your name">
    <input  class="signIp" type="email" name="email" placeholder="email">
    <input class="signIp" type="text" name="uid" placeholder="username">
    <input class="signIp" type="password" name="pwd" placeholder="Password">
    <input class="signIp" type="password" name="pwdrepeat" placeholder="Repeat password">
    <button class="signIp" type="submit" name="submit">Sign Up</button>
  </form>
  <?php
    if(isset($_GET["error"])) {
        if($_GET["error"] == "emptyinput") {
            echo "<p>Fill in input fields!</p>";
        }
        else if ($_GET["error"] == "invaliduid") {
            echo "<p>choose a proper username!</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
            echo "<p>choose a proper email</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>passwords don't match</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>something is wrong</p>";
        }
        else if ($_GET["error"] == "usernametaken") {
            echo "<p>username already taken</p>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p>Signed up successful</p>";
            header("location: index.php");
            exit();
        }
    }
    ?>
  </section>

</body>
</html>