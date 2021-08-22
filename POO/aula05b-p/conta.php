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
    $c1 = new ContaBanco();
    $c1->setDono("Gabriel");
    $c1->abrirConta("cc");
    $c1->pagarMensal();
    print_r($c1);
    $c2 = new ContaBanco();
    $c2->setDono("Maria");
    $c2->abrirConta("cp");
    print_r($c2);
  ?>
  </pre>
</body>
</html>