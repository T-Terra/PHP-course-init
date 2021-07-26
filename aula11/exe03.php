<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
        $init = isset($_GET["init"])?$_GET["init"]:0;
        $final = isset($_GET["final"])?$_GET["final"]:0;
        $incremento = isset($_GET["incre"])?$_GET["incre"]:0;
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Contagem progressiva</title>
    <style>
        input.botao {
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
        if ($init < $final) {
            while ($init <= $final) {
                echo "$init ";
                $init += $incremento;
            }
        } else {
            while ($init >= $final) {
                echo "$init ";
                $init -= $incremento;
            } 
        }
    ?>
</div>  
</body>
</html>