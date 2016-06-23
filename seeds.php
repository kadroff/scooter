<?php
  require 'config.php';

  $sql ="CREATE TABLE Motors
(
  name VARCHAR(128),
  id INT AUTO_INCREMENT PRIMARY KEY
)";

  $sql = "INSERT INTO Motors (id, name) VALUES
(1, 'motors_test1'),
(2, 'motors_test2'),
(3, 'motors_test3')";

 $sql ="CREATE TABLE motors_cylindres
 (
   motors_id INT,
   cylindres_id INT
 )";

 $sql= "INSERT INTO motors_cylindres (motors_id, cylindres_id) VALUES
(1, 2),
(1, 3),
(2, 1)";

 $sql = "CREATE TABLE Cylindres
(
   name VARCHAR (128),
   id  INT PRIMARY KEY AUTO_INCREMENT
)";

  $sql = "INSERT INTO Cylindres (id, name) VALUES
(1, 'cylindres_test1'),
(2, 'cylindres_test2'),
(3, 'cylindres_test3')";


  $mysqli->query($sql);



 ?>
