<?php
    // require "database_connection.php";
    // $db_table_to_show = "news";
    //
    // $qr_result = $mysqli->query("SELECT * FROM news")
    // or die(mysqli_error());
    //
    //
    //
    // while($data = mysqli_fetch_array($qr_result)){
    //   echo '<input type="submit" id="select" value="Вступить в клуб">' . $data['model'] . '</input>';
    //
    // };

?>

<html>
  <head>
      <meta charset="utf-8">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="js/bootstrap.min.js" rel="stylesheet">
      <link href="css/main.css" rel="stylesheet">
      <script src="js/jquery-2.2.3.min.js"></script>
      <script src="js/app.js"></script>
  </head>
    <body>
      <div class="container">
         <ul class="select-engine-left">
           <li id="minarelli-h"><a>Minarelli (horizontal)</a></li>
           <li id="minarelli-v">Minarelli (vertical)</li>
           <li id="3kj">3kj</li>
           <li id="hiper">Hi-per-2pro</li>
         </ul>

          <ul class="select-engine-right">
            <li id="af18">Af 18/27</li>
            <li id="af34">Af 34-35</li>
            <li id="morini">Morini</li>
            <li id="bigblock">Hi-per bigblock</li>
          </ul>
      </div>
   </body>
   </html>
