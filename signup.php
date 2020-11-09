<?php
  include_once 'header.php';
  ?>

  <section class="signup-form">
  <h2>Sign up</h2>
  <form action="includes/signup.inc.php" method="post">
    <input type="text" name="name" placeholder="enter your name">
    <input type="email" name="email" placeholder="email">
    <input type="text" name="uid" placeholder="username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwdrepeat" placeholder="Repeat password">
    <button type="submit" name="submit">Sign Up</button>
  </form>
  </section>
</body>
</html>