<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css"/>
    <title>Testando PHP</title>
    <style>
        
    </style>
</head>
<body>
<div>
    <?php 
        // errei essa questão no teste está retornando 7 
        function f($v, $n) {
            if ($n <= 0) return 1;
            else
            return $v[$n-1] * f($v, $n-2) + 1;
        }
        $a = array(0,1,2,3);
        print (f($a, 4));
    ?>
</div>
</body>
</html>