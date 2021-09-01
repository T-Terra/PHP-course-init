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
        require_once "../class/Pessoa.php";
        require_once "../class/Aluno.php";
        require_once "../class/Funcionario.php";
        require_once "../class/Professor.php";

        //programa principal
        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();

        $p1->setNome("pedro");
        $p2->setNome("Maria");
        $p3->setNome("Cláudia");
        $p4->setNome("Fabiana");

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);


      ?>
    </pre>
</body>
</html>