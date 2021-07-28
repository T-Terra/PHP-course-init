<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
        $num = isset($_GET["num"])?$_GET["num"]:0;
        $op = isset($_GET["operacao"])?$_GET["operacao"]:1;
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css"/>
    <title>Exercício Calculo</title>
    <style>
        span.nota{
            color: red;
        }
        a {
            background-color: rgb(38, 0, 255);
            color: white;
            padding: 5pt 5pt 5pt 5pt;
            border-radius: 10pt;
            box-shadow: black 1pt  2pt 2pt 1pt;
        }
        
    </style>
</head>
<body>
<div>
    <?php
        switch ($op) {
            case 1:
                $r = $num * 2;
                break;
            case 2:
                $r = $num ^ 3;
                break;
            case 3:
                $r = sqrt($num);
            
        }
        echo "O resultado da operacão é <span class='foco'>$r</span> "
    ?>
    <br><a href="exe01.html">voltar</a>
</div>
</body>
</html>