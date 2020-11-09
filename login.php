<?php
  include_once 'header.php';
  ?>

  <section class="login-form">
  <h2>Sign up</h2>
  <form action="includes/login.inc.php" method="post">
    <input type="text" name="uid" placeholder="Username/Email">
    <input type="password" name="pwd" placeholder="Password">
    <button type="submit" name="submit">Log In</button>
  </form>
  </section>
</body>
</html>