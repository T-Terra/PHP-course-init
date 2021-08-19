<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usando Classes</title>
</head>
<body>
  <?php
    require_once "./class/ClassCaneta.php";
    /* 
    só posso mexer nos Atributos e Métodos Públicos
    */
    $c1 = new Caneta;
    $c1->cor = "vermelho";
    $c1->ponta = 0.5;
    $c1->tampar();
    print_r($c1);
    $c1->rabiscar();

    $c2 = new Caneta;
    $c2->cor = "amarelo";
    $c2->carga = 50;
    $c2->destampar();
    $c2->rabiscar();
    print_r($c2);

    $dog = new Cachorro;
    $dog->cor = "preto";
    $dog->peso = 25;
    $dog->raca = "Vira-lata";
    $dog->iscachorro();
    $dog->latir();
    $dog->iscachorro();
    print_r($dog);
  ?>
</body>
</html>