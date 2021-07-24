<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
        $ano = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $ano;
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css"/>
    <title>Exercício Voto Aula 09</title>
</head>
<body>
<div>
    <?php
       if ($i<16){
           $tipodevoto = "Não vota";
           $d = "Não pode dirigir";
        }
        elseif (($i >= 16 && $i < 18) || ($i >= 65)){
            $tipodevoto = "Opcional";
            $d = "Não pode dirigir";
        }
        else {
            $tipodevoto = "Obrigatório";
            $d = "Pode Dirigir";
        }  
       echo "Nascendo em $ano com $i anos:<br>";
       echo "Para essa idade, $tipodevoto";
    ?>
    <br><a href="exevota.html">volta</a>
</div>
</body>
</html>