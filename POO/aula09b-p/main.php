<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>exe 09p</title>
</head>
<body>
  <pre>
    <?php
      require_once "pessoa.php";
      $p = array();
      $p[1] = new Pessoa("Gabriel", 22, "M");
      //$p[1]->fazerAniver();
      print_r($p[1]);
    ?>
  </pre>
  
</body>
</html>