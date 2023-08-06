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
  $preco = $_GET['preco'] ?? 0;
  $reajuste = $_GET['reajuste'] ?? 0;
  ?>
  <main>
    <h1>Reajustador de Preços</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="preco">Preço do Produto (R$)</label>
      <input type="number" name="preco" id="preco" min="0.010" step="0.01" value="<?=$preco?>">
      <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
      <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()"
        value="<?=$reajuste?>">
      <input type="submit" value="Reajustar">
    </form>
  </main>
  <?php 
  
  $aumento = ($preco * $reajuste) / 100;
  $novo = $preco + $aumento;
  
  ?>
  <section>
    <h2>Resultado do Reajuste</h2>

    <p>O produto que custava R$ <?=number_format($preco,2,",",".")?> , com <strong><?=$reajuste?>%</strong> de
      <strong>aumento</strong>
      vai passar a custar <strong>R$ <?=number_format($novo,2,",",".")?></strong> a partir de agora.
    </p>

  </section>
  <script>
  // declaraçoes automáticas
  mudaValor();

  function mudaValor() {
    p.innerText = reajuste.value;
  };
  </script>
</body>

</html>