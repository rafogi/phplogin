<?php
  include_once 'header.php';
  ?>

  <section class="login-form">
  <h1 style='margin-top:2em'>Log In</h1>
  <form action="includes/login.inc.php" method="post">
    <input type="text" name="uid" placeholder="Username/Email">
    <input type="password" name="pwd" placeholder="Password">
    <button type="submit" name="submit">Log In</button>
  </form>
  <?php
    if(isset($_GET["error"])) {
        if($_GET["error"] == "emptyinput") {
            echo "<p>Fill in input fields!</p>";
        }
        else if ($_GET["error"] == "wronglogin") {
            echo "<p>incorrect login info!</p>";
        }
    }
    ?>
  </section>
</body>
</html>