<?php
  require 'config.php';

  $id = $_GET['id'];


 $sql = "select Cylindres.id, Cylindres.name
from Cylindres inner join motors_cylindres
on motors_cylindres.cylindres_id=Cylindres.id
where motors_cylindres.motors_id=1";


 $select = $mysqli->query("SELECT Cylindres.id, Cylindres.name
 from Cylindres inner join motors_cylindres
 on motors_cylindres.cylindres_id=Cylindres.id
 where motors_cylindres.motors_id=$id");

 foreach ($select as $value ) {
   echo $value['name'];
 }

 ?>
