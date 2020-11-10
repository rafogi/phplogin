<?php
  include_once 'header.php';
  include_once 'includes/dbh.inc.php'
  ?>
  <link rel="stylesheet" href="index.css">
</body>
  <section class="container"> 
  <?php
    $qry = mysqli_query($conn, "SELECT * FROM characters;");
    while($result = mysqli_fetch_array($qry)) {
      echo "<article>";
      echo "<h4>$result[name]</h4>";
      echo "<img src=\"$result[image]\" height=\"350\" width=\"100%\" max-width:\"100%\" >";
      echo "</article>";
    }
    mysqli_close($conn);
  ?>
  </section>
</html>