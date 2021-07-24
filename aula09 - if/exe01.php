<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
        $nota1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
        $nota2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
        $media = ($nota1 + $nota2) / 2
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css"/>
    <title>Exercício Calcular a Média</title>
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
       if ($media <= 5){
           $sit = "REPROVADO!";
        }
        elseif($media > 5 && $media < 7) {
            $sit = "RECUPERAÇÃO.";
        }
        else {
            $sit = "APROVADO!";  
        }
        echo "A media entre <span class='nota'>$nota1</span> e <span class='nota'>$nota2</span> é igual a <span class='nota'>$media</span><br>";
        echo "Situação do aluno: <span class='nota'>$sit</span>"
    ?>
    <a href="exe01.html">voltar</a>
</div>
</body>
</html>