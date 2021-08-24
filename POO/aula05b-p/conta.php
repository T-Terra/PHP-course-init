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

    $c1 = new ContaBanco(1);
    $c1->abrirConta("cc");
    $c1->setDono("Jubileu");
    $c1->depositar(300);
    $c1->pagarMensal();
    
    $c2 = new ContaBanco(2);
    $c2->abrirConta("cp");
    $c2->setDono("Creuza");
    $c2->depositar(500);
    $c2->sacar(650);
    $c2->fecharConta();


    print_r($c1);
    print_r($c2);

  ?>
  </pre>
</body>
</html>