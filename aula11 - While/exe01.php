<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Contagem progressiva</title>
    <style>
        a {
            background-color: rgb(62, 66, 119);
            color: white;
            padding: 4pt 4pt 4pt 4pt;
            border-radius: 0pt 5pt 0pt 5pt;
            box-shadow: black 2pt 2pt 4pt 1pt;
        }
    </style>
</head>
<body>
<div>
    <?php
        $cont = 1;
        while($cont <= 10) {
            echo "$cont ";
            $cont += 1;
        }
        $c = 10;
        while($c >= 1) {
            echo "$c ";
            $c -= 1;
        }
    ?>
    <br/><a href="exe01.html">Voltar</a>  
</div>  
</body>
</html>