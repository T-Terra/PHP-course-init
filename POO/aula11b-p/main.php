<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Herança</title>
</head>
<body>
  <pre>
    <?php 
      require_once "Aluno.php";
      require_once "Bolsista.php";
      //$p1 = new Pessoa;
      /*$v1 = new Visitante;
      $v1->setNome("Juvenal");
      $v1->setIdade(34);
      $v1->setSexo("M");
      //print_r($v1)*/
      $a1 = new Aluno;
      $a1->setNome("Pedro");
      $a1->setIdade(16);
      $a1->setSexo("M");
      $a1->setMatr(11111);
      $a1->setCurso("Programação PHP");
      $a1->pagarMensal();
      print_r($a1);

      $b1 = new Bolsista;
      $b1->setNome("Maicon");
      $b1->setIdade(18);
      $b1->setSexo("M");
      $b1->setMatr(22222);
      $b1->setBolsa(12.5);
      $b1->setCurso("Programação Java");
      $b1->pagarMensal();
      print_r($b1);


    ?>
  </pre>
</body>
</html>