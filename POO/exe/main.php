<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>exe 01</title>
</head>
<body>
  <pre>
    <?php 
      require_once "Video.php";
      require_once "Gafanhoto.php";
      require_once "Visualizacao.php";
      //require_once "Pessoa.php";
      $v[0] = new Video("Aula 1 de POO");
      $v[1] = new Video("Aula 1 de PHP");
      print_r($v);

      $g[0] = new Gafanhoto("Gabriel", 22, "M", "gabriel@gmail.com");
      print_r($g);

      /*$vis[0] = new Visualizacao($g[0], $v[0]);
      $vis[1] = new Visualizacao($g[0], $v[1]);

      $vis[0]->avaliar();
      print_r($vis);*/

    ?>
  </pre>
</body>
</html>