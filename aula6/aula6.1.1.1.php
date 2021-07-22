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
        $x = "abc";
        $$x = "def";
        echo "O conteudo da variavel X é $x";
        echo "<br>A variavel ABC criada recebeu o valor $abc"; 
        /*Com dois $$ você pode atribuir uma variavel dentro de outra variavel*/
    ?>
</div>
</body>
</html>