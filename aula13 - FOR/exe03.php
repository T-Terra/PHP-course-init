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
        for ($res = 1; $res <= $num; $res++){
            $tot = $num / $res;
            echo "$num / $res = $tot<br>";
        }
        if ($num % $res == 1 && $num % $res == ){
            echo "$num não é primo<br>";
        }
        else {
            echo "$num é primo<br>";
        }
    ?>
</div>
    
</body>
</html>