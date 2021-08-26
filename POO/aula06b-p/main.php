<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Controle Remoto</title>
</head>
<body>
  <pre>
    <?php
      require_once "../class/ClassControllers.php";
      // Objeto
      $con1 = new ControleRemoto;
      $con1->ligar();
      //$con1->maisVolume();
      $con1->menosVolume();
      $con1->abrirMenu();
      //$con1->desligar();
      //print_r($con1);
    ?>
  </pre>
  
</body>
</html>