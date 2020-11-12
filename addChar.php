<?php
  include_once 'header.php';
  ?>
<link rel="stylesheet" href="addChar.css">
<h1 style='margin-top:2em'>Add a character</h1>
<form action="includes/addChar.inc.php" method="post" class="add-Form">
    <section class="wrapper">
        <label class="add-label" for="name"><strong>Name</strong></label>
        <input type="text" name="name" placeholder="enter character name">
        <label class="add-label" for="description"><strong>Description</strong></label>
        <textarea name="description" style="height:10em"></textarea>
        <label class="add-label" for="image"><strong>Image (url)</strong></label>
        <input type="text" name="image" placeholder="image">
        <label class="add-label" for="race"><strong>Race</strong></label>
        <input type="text" name="race" placeholder="race">
        <button class="create-button" type="submit" name="submit">Create Character</button>
    </section>
  </form>
  <?php
    if(isset($_GET["error"])) {
        if($_GET["error"] == "emptyinput") {
            echo "<p style='text-align:center; color:red;'>Fill in input fields!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p style='text-align:center; color:red;'>something is wrong</p>";
        }
        else if ($_GET["error"] == "characternametaken") {
            echo "<p style='text-align:center; color:red;'>character name already taken</p>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p style='text-align:center; color:blue;'>character created successfully</p>";
            header("location: characters.php");
        }
    }
    ?>
</body>

</html>