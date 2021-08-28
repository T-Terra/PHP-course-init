<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UFC emoji</title>
</head>
<body>
  <pre>
    <?php 
      require_once "../class/ClassUfc.php";
      $l = array();
      $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1);
      $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
      $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
      $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
      $l[4] = new Lutador("Gabriel", "Brasil", 21, 1.81, 82, 24, 0, 0);
      $l[5] = new Lutador("Thomas", "Peru", 30, 1.90, 110, 10, 8, 3);
      $l[4]->apresentar();
      $l[5]->status();
      //print_r($l);
    ?>
  </pre>
  
</body>
</html>