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
      $Lutador1 = new Lutador();
      $Lutador1->apresentar();
      //print_r($Lutador1);
    ?>
  </pre>
  
</body>
</html>