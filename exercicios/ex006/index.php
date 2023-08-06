<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio PHP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php

    //capurando os dados do formulario retroalimentado
  $valor1=$_GET["v1"] ?? 0 ;
  $valor2=$_GET["v2"] ?? 0 ;
  $soma = $valor1 + $valor2;
  ?>
  <main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="v1">Valor 1</label>
      <input type="number" name="v1" id="v1" value="<?=$valor1?>">
      <label for="v2">Valor 2</label>
      <input type="number" name="v2" id="v2" value="<?=$valor2?>">
      <input type="submit" value="Somar">
    </form>
  </main>
  <section id="resultado">
    <h2>Resultado da Soma</h2>
    <?php 
    
        
        echo "<p> O resultado da soma entre <strong>$valor1</strong> e <strong>$valor2</strong> é igual a <strong>$soma</strong></p>";
      ?>
  </section>
</body>

</html>