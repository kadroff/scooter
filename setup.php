<?php
require 'config.php';

$mysqli->query("
  CREATE TABLE Motors (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(128) NOT NULL,
    PRIMARY KEY (`id`)
  )
");

$mysqli->query("
  CREATE TABLE Cylindres (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(128) NOT NULL,
    PRIMARY KEY (`id`)
  )
");

$mysqli->query("
  CREATE TABLE Motors_Cylindres (
    `motor_id` INT(10) NOT NULL,
    `cylindre_id` INT(10) NOT NULL
  )
");

 $mysqli->query("
  CREATE TABLE Variators (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(128) NOT NULL,
  PRIMARY KEY (`id`)
)
");

$mysqli->query("
  CREATE TABLE Motors_Variators (
    `motor_id` INT(10) NOT NULL,
    `variator_id` INT(10) NOT NULL
  )
");

$mysqli->close();
?>
