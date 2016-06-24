<?php
require 'config.php';

$id = $_GET['id'];

$cylindres = $mysqli->query("SELECT Cylindres.id, Cylindres.name
from Cylindres inner join Motors_Cylindres
on Motors_Cylindres.cylindre_id=Cylindres.id
where Motors_Cylindres.motor_id=$id");
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Scooter-tuning</title>
  </head>
<body>
  <?php
  while ($cylindre = $cylindres->fetch_object()){
    echo "<li>$cylindre->name</li>";
  }
  ?>
</body>
</html>
