<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css"/>
    <title>Aula 08 PHP</title>
    <style>
        
    </style>
</head>
<body>
<div>
    <?php
        $valor = $_GET["value"];
        echo "O usuário digitou $valor<br>";
        $nome = $_GET["name"];
        $idade = $_GET["age"];
        echo "O usuário digitou $nome e a idade $idade";
    ?>
    <a href="aula08.html">voltar</a>  
</div>
</body>
</html>