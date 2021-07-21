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
        echo "<h2>Hello, <br> world!</h2>";
        echo "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde libero maxime deserunt nisi dolores voluptatibus quo eligendi, dolorem perspiciatis, ducimus optio aperiam quod explicabo ad, accusamus sunt minima sequi assumenda.</p>";
        $name = "Gabriel";
        $age = 21;
        echo "$name tem $age anos!<br>";
        $n1 = 2;
        $n2 = 2;
        $s = $n1 + $n2;
        echo "A soma de $n1 + $n2 é igual a $s";
    ?>
</div>
</body>
</html>