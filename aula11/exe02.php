<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Contagem progressiva</title>
    <style>
        input.botao {
            background-color: rgb(62, 66, 119);
            color: white;
            padding: 4pt 4pt 4pt 4pt;
            border-radius: 0pt 5pt 0pt 5pt;
            box-shadow: black 2pt 2pt 4pt 1pt;
        }
    </style>
</head>
<body>
<div>
    <form method="get" action="exe01.html">
        <?php
            $cont = 1;
            while ($cont <= 5) {
               echo  "Valor $cont: <input type='number' name='v$cont' max='100' min='0' value='0'/><br>";
               $cont += 1;
            }
        
        ?>
        <input type="submit" value="Enviar" class="botao"/>
    </form>
</div>  
</body>
</html>