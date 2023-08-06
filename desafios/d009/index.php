<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php

  $v1 = $_GET['v1'] ?? '';
  $p1 = $_GET['p1'] ?? '';
  $v2 = $_GET['v2'] ?? '';
  $p2 = $_GET['p2'] ?? '';

  ?>
  <main>
    <h1>Informe dois valores</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="v1">Valor 1:</label>
      <input type="number" name="v1" id="v1" value="<?= $v1 ?>" step="0.01" required>
      <label for="p1">Peso 1:</label>
      <input type="number" name="p1" id="p1" value="<?= $p1 ?>" step="0.01" min="1" required>
      <label for="v2">Valor 2:</label>
      <input type="number" name="v2" id="v2" value="<?= $v2 ?>" step="0.01" required>
      <label for="p2">Peso 2:</label>
      <input type="number" name="p2" id="p2" value="<?= $p2 ?>" step="0.01" min="1" required>
      <input type="submit" value="Calcular Médias">
    </form>
  </main>
  <section>
    <h2>Resultado Final</h2>
    <?php
    
    $ma = ($v1 + $v2)/2;
    $mp = ($v1 *$p1 + $v2*$p2)/ ($p1 +$p2);

    echo "Analisando os números <strong>$v1</strong> e <strong>$v2</strong>, temos:";
    echo "
    <ul>
      <li><p>A média aritmética é igual a ".number_format($ma,2,",",".")."</p></li>
      <li><p>A média ponderada é igual a ". number_format($mp,2,",",".") ."</p></li>
    </ul>
    ";
    ?>
  </section>
</body>

</html>