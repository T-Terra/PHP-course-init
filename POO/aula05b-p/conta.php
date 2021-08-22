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
    require_once "../class/ClassConta.php";
    $c1 = new ContaBanco("Gabriel", "cc", 123456);
    $c1->abrirConta();
    $c1->depositar(150);
    $c1->pagarMensal();
    print_r($c1);
    print_r($c1->getTipo());
  ?>
  </pre>
</body>
</html>