<?php
require 'config.php';

$mysqli->query("
  INSERT INTO Motors (id, name) VALUES
  (1, 'motor_test1'),
  (2, 'motor_test2'),
  (3, 'motor_test3')
");

$mysqli->query("
  INSERT INTO Cylindres (id, name) VALUES
  (1, 'cylindre_test1'),
  (2, 'cylindre_test2'),
  (3, 'cylindre_test3')
");

$mysqli->query("
  INSERT INTO Motors_Cylindres (motor_id, cylindre_id) VALUES
  (1, 2),
  (1, 3),
  (2, 1)
");

$mysqli->query("
  INSERT INTO Variators (id, name) VALUES
  (1, 'variator_test1'),
  (2, 'variator_test2'),
  (3, 'variator_test3')
");

$mysqli->query("
  INSERT INTO Motors_Variators (motor_id, variator_id) VALUES
  (1, 2),
  (1, 3),
  (2, 1)
");

$mysqli->close();
?>
