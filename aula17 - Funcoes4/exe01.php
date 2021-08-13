<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/estilo.css">
  <title>Aula 17 - funções</title>
</head>
<body>
<div>
  <?php
    echo "<h2>1° strtolower</h2>";
    $txt = "Toma PDF PiPi";
    $mini = strtolower($txt);
    print("O texto em minúsculas é: " . $mini);
    echo "<h2>2° strtoupper</h2>";
    $nome = "Gabriel Pereira Terra";
    $upper = strtoupper($nome);
    print("Seu nome em maiúsculas é: ". $upper);
    echo "<h2>3° ucfirst</h2>";
    $nome2 = "gabriel Pereira Terra";
    $uppercase = ucfirst($nome2);
    print("Seu nome é ". $uppercase);
    echo "<h2>4° ucwords e strrev</h2>";
    $nome3 = "gabriel pereira terra";
    print("Seu nome é ". ucwords($nome3));
    echo "<br>";
    print(strrev($nome3));
    echo "<h2>5° strpos</h2>";
    $frase = "Estou aprendendo PHP";
    $pos = strpos($frase, "PHP");
    print("$frase <br>A string foi encontrada na posição $pos");
    echo "<h2>6° stripos</h2>";
    $pos2 = stripos($frase, "php");
    print("$frase <br> A string foi encontrada na posição $pos2");
    echo "<h2>7° substr_count</h2>";
    $cont = substr_count($frase, "PHP");
    print("PHP foi encontrado $cont vezes");
    echo "<h2>8° substr</h2>";
    $site = "curso em video";
    $sub = substr($site, 0, 10);
    echo "$sub ";
    echo "<h2>9° str_pad e str_repeat</h2>";
    $nome4 = "Gabriel";
    $novo = str_pad($nome4, 30, " ", STR_PAD_RIGHT);
    print("Meu pro $novo é lindo!");
    $txt = str_repeat("PHP", 5);
    print("<br>O texto gerado foi: $txt");
    echo "<h2>10° str_replace</h2>";
    $frase2 = "Gosto de estudar Matemática!!!";
    $novafrase = str_ireplace("matemática", "PHP", $frase2);
    print($frase2);
    echo "<br>";
    print($novafrase);
  ?>
</div>
</body>
</html>