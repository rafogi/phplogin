<?php
  include_once 'header.php';
  ?>

  <section class="signup-form">
  <h1 style='margin-top:2em'>Sign up</h1>
  <form action="includes/signup.inc.php" method="post">
    <input type="text" name="name" placeholder="enter your name">
    <input type="email" name="email" placeholder="email">
    <input type="text" name="uid" placeholder="username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwdrepeat" placeholder="Repeat password">
    <button type="submit" name="submit">Sign Up</button>
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
            header("location: ../index.php");
            exit();
        }
    }
    ?>
  </section>

</body>
</html>