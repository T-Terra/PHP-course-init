<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/estilo.css">
  <title>Aula 16 - funções</title>
</head>
<body>
<div>

  <?php
    echo "<h1>Funções prontas do PHP</h1>";
    echo "<h2>1° Printf e print_r</h2>";
    $p = "leite";
    $pr = 4.5;
    printf ("O %s custa R$ %.2f<br>", $p, $pr);
    $x[0] = 2;
    $x[1] = 5;
    $x[2] = 10;
    print_r($x);
    printf("<br>");
    $v = array (3, 4, 5, 6, 8, 11);
    print_r($v);
    echo "<h2>2° Wordwrap</h2>";
    $t = "Aqui temos um testo gigante no PHP usado para mostrar a função wordwrap";
    $r = wordwrap($t, 10, "<br/>\n", true);
    echo $r;
    echo "<h2>3° strlen</h2>";
    $txt = "Curso em vídeo";
    $tam = strlen($txt);
    echo "O tamanho da variável $txt é $tam<br>";
    echo "<h2>4° trim</h2>";
    $nome = "   josé da silva   ";
    echo(strlen($nome));
    $novo = trim($nome);
    echo"<br>";
    echo(strlen($novo));
  ?>
</div>
</body>
</html>