<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Contagem</title>
</head>
<body>
<div>
    <?php
        for ($c=1;$c<=10;$c++) {
            echo "$c ";
        }
        echo "<br>";
        for ($c=10;$c>=1;$c--) {
            echo "$c ";
        }
        echo "<br>";
        for ($c=1;$c<=50;$c+=5) {
            echo "$c ";
        }
        echo "<br>";
        for ($c=100;$c>=1;$c-=11) {
            echo "$c ";
        }
    ?>
</div>
</body>
</html>