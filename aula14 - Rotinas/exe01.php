<!DOCTYPE html>
<html lang="pt=BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/estilo.css">
  <title>Funções // soma</title>
  <style>
    input.num {
      width: 2.2rem;
    }
  </style>
</head>
<body>
  <div>
    <form action="exe01.php" method="get">
      Digite o 1° número:
      <input class="num" name="num1" type="number" value="1"><br>
      Digite o 2° número:
      <input class="num" name="num2" type="number" value="1"><br>
      <input type="submit" value="somar">
    </form>
    <?php 
      $num = isset($_GET["num1"])?$_GET["num1"]:1;
      $num2 = isset($_GET["num2"])?$_GET["num2"]:1;
      function soma ($n, $n2){
        $sum = $n + $n2;
        return $sum;
        #echo "A soma entre $n e $n2 é igual a $sum";
      }
      $res = soma($num, $num2);
      echo "A soma entre $num e $num2 é igual a $res";
    ?>
  </div>
</body>
</html>