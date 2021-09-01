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
      require_once "livro.php";

      $p = array();
      $p[0] = new Pessoa("Gabriel", 22, "M");
      $p[1] = new Pessoa("Maria", 62, "F");
      //$p[1]->fazerAniver();
      //print_r($p[0]);

      $l = array();
      $l[0] = new Livro("Harry Potter", "JK. Roling", 210, $p[0]);
      $l[0]->avancarPag();
      $l[0]->folhear(80);
      $l[0]->detalhes();
      //$l[0]->avancarPag();
      //$l[0]->abrir();
      //$l[0]->fechar();
      //print_r($l[0]);
    ?>
  </pre>
  
</body>
</html>