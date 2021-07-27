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
    <form method="get" action="exe01.php">
        <fieldset><legend>Tabuada</legend>
            Número:
            <select name="tab" id="tab">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <input type="submit" value="Tabuada"><br>
            <?php
                $tab = isset($_GET["tab"])?$_GET["tab"]:1; # pega o select do HTML
                $c = 1;
                $tot = $tab;
                do {
                    echo "$tab x $c = $tot<br>";
                    $c += 1;
                    $tot = $tab * $c;
                } while ($c <= 10);

            ?>
        </fieldset>
    </form>
    
</div>  
</body>
</html>