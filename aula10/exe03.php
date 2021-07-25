<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
        $estado = isset($_GET["estado"])?$_GET["estado"]:"Estado não informado";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Estados</title>
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
        switch ($estado){
            case 1:
                $regiao = "Região Centro-Oeste";
                break;
            case 2:
                $regiao = "Região Norte";
                break;
            case 3:
                $regiao = "Região Nordeste";
                break;
            case 4:
                $regiao = "Região Sudeste";
                break;
            case 5:
                $regiao = "Região Sul";
        }
        echo "Você mora na <span class='foco'>$regiao</span>";

    ?>
    <br/><a href="exe03.html">Voltar</a>  
</div>  
</body>
</html>