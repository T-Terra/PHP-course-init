<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css"/>
    <title>Aula 05 PHP</title>
    <style>
        
    </style>
</head>
<body>
<div>
    <?php 
        $n1 = $_GET["x"];
        $n2 = $_GET["y"];
        echo "<h2>Valores recebidos: $n1 e $n2</h2>";
        echo "O valor absoluto de $n2 e ". abs($n2);
        echo " <br>O valor de $n1 <sup>$n2</sup> e ". pow($n1, $n2);
        echo "<br>A raiz de $n1 é ". sqrt($n1);
        echo "<br>O valor arredondado de $n2 é ". round($n2);
        echo "<br>A parte inteira de $n2 é ". intval($n2);
        echo "<br>O valor de $n1 em moeda é R$". number_format($n1, 2, ",", ".");
        
    ?>
</div>
</body>
</html>