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
        $atual = $_GET["aa"];
        echo "O Ano atual recebido foi $atual";
        echo "<br>O ano anterior é ". --$atual;
    ?>
</div>
</body>
</html>