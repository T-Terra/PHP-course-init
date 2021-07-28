<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador/Fatorial</title>
    <link rel="stylesheet" href="../css/estilo.css"/>
</head>
<body>
<div>
    <form method="get" action="teste01.php">
        Digite um número:
        <input type="number" name="num" min="0" max="15" value="1">
        <input type="submit" name="button">
    </form>
    <?php
        $num = isset($_GET["num"])?$_GET["num"]:0;
        $c = $num;
        $fat = 1;
        do {
            $fat = $fat * $c;
            $c -= 1;
        } while ($c >= 1);
        echo "$num! = $fat";
    ?>  

</div>   
</body>
</html>