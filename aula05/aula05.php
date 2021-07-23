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
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $media = ($n1 + $n2) / 2;
        echo "<h2>Valores recebidos: $n1 e $n2</h2>";
        echo "A soma vale ". ($n1 + $n2);
        echo "<br>A subtração vale ". ($n1 - $n2);
        echo "<br>A multiplicação vale ". ($n1 * $n2);
        echo "<br>A divisão vale ". ($n1 / $n2);
        echo "<br>O módulo vale ". ($n1 % $n2);
        echo "<br>A média vale $media";
    ?>
</div>
</body>
</html>