<?php
$local = 'localhost';
$pass = 'password_here';
$login = 'username_here';
$db_name = 'database_name_here';

$mysqli = new mysqli ($local, $login, $pass, $db_name) or
die ('Не удалось подключиться к базе данных');
?>
