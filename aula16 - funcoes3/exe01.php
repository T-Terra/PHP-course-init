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
    echo "<h2>5° str_word_count</h2>";
    $frase = "Eu vou estudar PHP";
    $cont = str_word_count($frase, 0); # no lugar do 0 posso colocar 1 que mostra um array ou 2
    print($cont);
    echo "<h2>6° explode</h2>";
    $site = "Curso em vídeo";
    $vetor = explode(" ", $site);
    print_r($vetor);
    echo "<h2>7° str_split</h2>";
    $nome = "Maria";
    $vetor = str_split($nome);
    print_r($vetor);
    echo "<h2>8° implode</h2>";
    echo "<p>Join() é a mesma coisa que usar implode()</p>";
    $veto[0] = "curso";
    $veto[1] = "em";
    $veto[2] = "vídeo";
    $texto = implode("#", $veto); # join(); é a mesma coisa que usar implode
    print($texto);
    echo "<h2>9° chr</h2>";
    $letra = chr(67);
    echo "A letra de código 67 é $letra";
    echo "<h2>10° ord</h2>";
    $leta = "C";
    $cod = ord($leta);
    echo "O código da letra C é $cod";

  ?>
</div>
</body>
</html>