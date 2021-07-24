<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php 
        $txt = isset($_GET["t"])?$_GET["t"]:"Texto Generico";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css"/>
    <title>Aula 08 PHP</title>
    <style>
        span.texto {
            font-size: <?php echo $tam;?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
<div>
    <?php
        echo "Seu nome formatado <span class='texto'>$txt</span>";
    ?>
    <br><a href="aula08.0.0.2.html">Voltar</a>
</div>
</body>
</html>