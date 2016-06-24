<?php
require 'config.php';

$id = $_GET['id'];

$cylindres = $mysqli->query("SELECT Cylindres.id, Cylindres.name
from Cylindres inner join Motors_Cylindres
on Motors_Cylindres.cylindre_id=Cylindres.id
where Motors_Cylindres.motor_id=$id");


$variators = $mysqli->query("SELECT Variators.id, Variators.name
from Variators inner join Motors_Variators
on Motors_Variators.variator_id=Variators.id
where Motors_Variators.motor_id=$id");
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

  while ($variator = $variators->fetch_object()){
    echo "<li>$variator->name</li>";
  }
  ?>
</body>
</html>
