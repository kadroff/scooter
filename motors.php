<?php
  require 'config.php';

  $id = $_GET['id'];

 $select = $mysqli->query("SELECT Cylindres.id, Cylindres.name
 from Cylindres inner join motors_cylindres
 on motors_cylindres.cylindres_id=Cylindres.id
 where motors_cylindres.motors_id=$id");

 ?>
 <html>
   <head>
     <meta charset="utf-8">
  </head>
<body>
  <ul>
    <?php foreach ($select as $value ) {
     echo "<li>" . $value['name'] . "</li>";
    } ?>
</body>
</html>
