<?php
  $local = 'localhost';
  $pass = 'root';
  $login = 'root';
  $db_name = 'parts';

  $mysqli = new mysqli ($local, $login, $pass, $db_name) or
  die ('Не удалось подключиться к базе данных');

 ?>
