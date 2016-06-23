<?php

 require 'seeds.php';
 $sql= $mysqli->query("SELECT * FROM `Motors`");

?>
<html>
<head>
   <title>Scooter-tuning</title>
</head>
<body>
  <ul>
   <a href="motors.php?id=1"><?php foreach ($sql as $value) {
    echo "<li>". $value['name']. "</li>";
      
    } ?></a>
    <li><a href="motors.php?id=2"></li></a>
    <li><a href="motors.php?id=3"></li></a>

  </ul>
</body>
</html>
