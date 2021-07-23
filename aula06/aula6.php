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
        $preco = $_GET["p"];
        $dezporcento = $preco + ($preco * 10/100);
        echo "O valor recebido foi R$". number_format($preco, 2, ",", ".");
        echo "<br>10% a mais desse valor é R$". number_format($dezporcento, 2, ",", ".");
    ?>
</div>
</body>
</html>