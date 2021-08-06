<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Números primos</title>
</head>
<body>
<div>
    <form method="get" action="exe03.php">
        Número: 
        <input type="number" name="num" min="0" max="100" value="1">
        <input type="submit" name="verificar...">
    </form>
    <?php
        $num = isset($_GET["num"])?$_GET["num"]:1;
        $div = 0;
        echo "Analizando o número $num...<br>";
        echo "Valores múltiplos: ";
        for ($res = 1; $res <= $num; $res++){
            $tot = $num / $res;
            if ($tot === 0.0 && $res <= 2){
                $div += 1;
            }
            if ($div) {
                echo "$res ";
                $r = "NÃO É PRIMO";
            }
            else {
                echo "$res ";
                $r = "É PRIMO";
            }
            
        }
        echo "<br> O resultado é: $num $r";
        echo "<br>Total de múltiplos: $div";
    ?>
</div>  
</body>
</html>