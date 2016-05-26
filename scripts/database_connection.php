<?php
    require "app_config.php";

   $mysqli = new mysqli(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME)
    or die ("<p>Ошибка подключение к Базе Данных");

    echo "<p>Вы подключились к MySQL";

    

 ?>
