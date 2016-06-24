<?php
require 'config.php';

$motors = $mysqli->query("SELECT * FROM Motors");
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Scooter-tuning</title>
</head>
<body>
  <?php
  while ($motor = $motors->fetch_object()){
    echo "<li><a href='/motors.php?id=$motor->id'>$motor->name</a></li>";
  }
  ?>
</body>
</html>
