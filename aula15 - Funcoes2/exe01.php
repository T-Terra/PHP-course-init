<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/estilo.css">
  <title>Funções parte 2</title>
</head>
<body>
<div>
  <?php
    /*
      Podemos passar o & para passar um parametro por referencia, assim se a variavel x for alterada, a variavel A também sera.
    */
    function soma(&$x){ # passagem por referencia com o &
      $x = $x + 2;
      echo "O valor de x é $x";
    }
    $a = 3;
    soma($a);
    echo "<br>O valor de a é $a";
  ?>
</div>
</body>
</html>

