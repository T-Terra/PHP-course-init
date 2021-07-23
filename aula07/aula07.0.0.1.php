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
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1+$nota2) / 2;
        echo "A media entre $nota1 e $nota2 é $m<br>";
        # operador de comparação
        #$sit = ($m<6)?"Reprovado":"Aprovado"; 
        echo "A situacao do aluno é ". (($m<6)?"Reprovado":"Aprovado");
    ?>
</div>
</body>
</html>