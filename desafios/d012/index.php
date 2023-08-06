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
  $total = $_GET['seg'] ?? '0';
  $sobra = $total;
  //total semana
  $semana = (int) ($sobra / 604800);
  $sobra = $sobra % 604800;
  // total dias
  $dias = (int)($sobra / 86400);
  $sobra = $sobra % 86400;
  // total horas
  $hora = (int)($sobra / 3600);
  $sobra = $sobra % 3600;
  // Total minutos
  $minutos = (int)($sobra / 60);
  $sobra = $sobra % 60;
  // total segundos
  $segundo = $sobra;
  ?>
  <main>
    <h1>Calculadora de Tempo</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="seg">Qual é o total de segundos?</label>
      <input type="number" name="seg" id="seg" value="<?=$total?>">
      <input type="submit" value="Calcular">
    </form>
  </main>

  <section>
    <h2>Totalizando tudo</h2>
    <p>Analisando o valor que você digitou, <?=number_format($total,0,",",".")?> segundos equivale a um total de:</p>
    <ul>
      <li><?=$semana?> semanas</li>
      <li><?=$dias?> dias</li>
      <li><?=$hora?> horas</li>
      <li><?=$minutos?> minutos</li>
      <li><?=$segundo?> segundos</li>
    </ul>
  </section>

</body>

</html>