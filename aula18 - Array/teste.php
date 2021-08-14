<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estudo sobre Array</title>
  <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<div>
  <?php
    $n[0] = 100;
    $n[1] = 65;
    $n[2] = 10;
    print_r($n);
    foreach($n as $k => $v) {
        echo "<br>$v ";
    }
    echo "<h2>Matriz</h2>";
    $arr = array(array(2,5), array(10,22), array(3,0));
    foreach($arr as $key => $value) {
      print_r($value);
    }
  
  ?>

</div>
</body>
</html>