<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usando Classes</title>
</head>
<body>
  <pre>
  <?php
    require_once "../class/ClassCaneta02.php";
    
    $c1 = new Caneta("Bic", "Vermelha", 0.5);
    $c2 = new Caneta("Faber", "Preto", 1.2);
    //$c1->setModelo("BIC");
    //$c1->setPonta(0.5);
    print_r($c1);
    print_r($c2);
    //print("Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}");
  ?>
  </pre>
</body>
</html>