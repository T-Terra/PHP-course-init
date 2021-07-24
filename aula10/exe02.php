<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
        $dia= isset($_GET["dia"])?$_GET["dia"]:0;
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css"/>
    <title>Exercício Dia da semana</title>
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
        switch ($dia) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Precisa ir para escola!!!";
                break;
            case 7:
            case 8:
                echo "Não precisa ir para escola, pode descansar!";
                break;
            default:
                echo "Erro! algo deu errado.";
            
        }
    ?>
    <br><a href="exe02.html">voltar</a>
</div>
</body>
</html>