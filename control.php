<?php  
$motor = $_GET['motor'];
if($motor == "maju") {  
  $file = fopen("motor.json", "w") or die("can't open file");
  fwrite($file, '{"roda 1": "maju"}');
  fclose($file);
} 
else if ($motor == "mundur") {  
  $file = fopen("motor.json", "w") or die("can't open file");
  fwrite($file, '{"roda 1": "mundur"}');
  fclose($file);
}
elseif ($motor == "stop") {
  $file = fopen("motor.json", "w") or die("can't open file");
  fwrite($file, '{"roda 1": "stop"}');
  fclose($file);
}
?>

<html>  
  <head>      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LED for ESP8266</title>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  </head>
  <body>
    <div class="row" style="margin-top: 20px;">
      <div class="col-md-8 col-md-offset-2">
        <a href="?motor=on" class="btn btn-success btn-block btn-lg">Turn On</a>
        <br />
        <a href="?motor=stop" class="led btn btn-danger btn-block btn-lg">Turn Off</a>
        <br />
        <div class="motor-status well" style="margin-top: 5px; text-align:center">
          <?php
            if($motor=="maju") {
              echo("Roda 1 maju.");
            }
            else if ($motor=="mundur") {
              echo("Roda 1 mundur.");
            }
            else if ($motor=="stop") {
              echo("Roda 1 stop");
            }
            else {
              echo ("Klik salah satu tombol diatas");
            }
          ?>
        </div>
      </div>
    </div>
  </body>
</html>  