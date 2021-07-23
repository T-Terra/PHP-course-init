<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css"/>
    <title>Aula 07 PHP</title>
    <style>
        
    </style>
</head>
<body>
<div>
    <?php
        $ano = $_GET["an"];
        $idade = 2021 - $ano;
        echo "Quem nasceu em $ano tem $idade anos";
        #$tipo = ($idade>=18 && $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
        echo "<br>e o voto é ". (($idade>=18 && $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO");
    ?>
</div>
</body>
</html>