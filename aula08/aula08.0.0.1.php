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
        $nome = isset($_GET["name"])?$_GET["name"]:"[Não informado]"; 
        $ano = isset($_GET["ano"])?$_GET["ano"]:0;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Sem sexo]";
        $idade = date("Y") - $ano;
        echo "Seu nome é $nome do sexo $sexo e tem $idade anos";
    ?>
    <a href="aula08.0.0.1.html">voltar</a>  
</div>
</body>
</html>