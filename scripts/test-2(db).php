<?php
    $mysqli = new mysqli("localhost", "root", "root", "scooter-parts") or die("не получилось подключиться к БД");

    $result = $mysqli->query("SELECT * FROM `scooter`  ") or die('не получилось установить свзять с table scooter');

    foreach ($result as $echo_value) {
    };


 ?>
<html>
  <head>
      <meta charset="utf-8">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="js/bootstrap.min.js" rel="stylesheet">
      <link href="css/main.css" rel="stylesheet">
      <script src="js/jquery-2.2.3.min.js"></script>
      <script src="js/app.js"></script>
  </head>
  <body>
      <div class="container">
        <table class="table-config" width="800px" col="6">
          <tr>
            <th>Название мотора</th>
            <th>ЦПГ</th>
            <th>Труба</th>
            <th>Карбюратор</th>
            <th>Вариатор</th>
            <th>Сцепление</th>
          </tr>

          <tr class="1c">
            <th><?php echo $echo_value['name'] ?></th>
            <th><?php echo $echo_value['motor'] ?></th>
            <th><?php echo $echo_value['truba'] ?></th>
            <th><?php echo $echo_value['carb'] ?></th>
            <th><?php echo $echo_value['variator'] ?></th>
            <th><?php echo $echo_value['clutch'] ?></th>
          </tr>



        </table>
      </div>
  </body>
  </html>
