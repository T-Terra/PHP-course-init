<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Tabuada</title>
</head>
<body>
<div>
    <form method="get" action="exe02.php">
        Valor: 
        <select name="val" id="val">
            <?php
                for ($c=1; $c<=10; $c++){
                    echo "<option>$c</option>";
                }
            ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>
    <?php
        $val = isset($_GET["val"])?$_GET["val"]:1;
        for ($cont = 1; $cont <= 10; $cont++) {
            $tot = $val * $cont;
            echo "$val x $cont = $tot<br>";
        }
    ?>
</div>
</body>
</html>