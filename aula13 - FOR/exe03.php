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
            $tot = (int) $num / (int) $res;
            if ($num % $res === 0){
                echo "$res ";
                $r = "É PRIMO";
                $div++;
            }
            elseif ($tot === (float) $tot) {
                echo "$res ";
                $r = "NÃO É PRIMO";
                $div++;
            }
        }
        echo "<br> O resultado é: $num $r";
        echo "<br>Total de múltiplos: $div";
        /*
        $numero = 10;

        if (gmp_prob_prime($numero)) {
            print 'É primo';
        } else {
            print 'Não é primo';
        }
        */
    ?>
</div>  
</body>
</html>

