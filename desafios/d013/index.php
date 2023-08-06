<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
  <style>
  .nota {
    height: 50px;
    margin: 5px;
  }
  </style>
</head>

<body>
  <?php
  $saque = $_GET['saque']??0;
  
  $resto = $saque;
  // Saque de $100
  $tot100= floor($resto / 100);
  $resto %= 100;
  // Saque de 50
  $tot50 = floor($resto / 50);
  $resto %= 50;
    // Saque de 20
    $tot20 = floor($resto / 20);
    $resto %= 20;
  //Saque de 10
  $tot10 = floor($resto / 10);
  $resto %= 10;
  //Saque de 5
  $tot5 = floor($resto / 5);
  $resto %= 5;
    //Saque de 2
    $tot2 = floor($resto / 2);
    $resto %= 2;   
  ?>
  <main>
    <h1>Caixa Eletrônico</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="saque">Qual o valor você deseja sacar? (R$)<sup>*</sup></label>
      <input type="number" name="saque" id="saque" value="<?=$saque?>">
      <p style="font-size:0.7em;"><sup>*</sup>Notas diponíveis: R$100, R$50,R$20, R$10, R$5 e R$2</p>
      <input type="submit" value="Sacar">
    </form>
  </main>

  <section>
    <h2>Saque de R$<?=number_format($saque,2,",",".")?> solicitado
    </h2>
    <p>O caixa eletrônico vai te entregar as seguintes notas: </p>
    <ul>
      <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x <?=$tot100?></li>
      <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x <?=$tot50?></li>
      <li><img src="imagens/20-reais.jpg" alt="Nota de 20" class="nota"> x <?=$tot20?></li>
      <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x <?=$tot10?></li>
      <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x <?=$tot5?></li>
      <li><img src="imagens/2-reais.jpg" alt="Nota de 2" class="nota"> x <?=$tot2?></li>
    </ul>
    <p>Você possui disponivel R$<?=number_format($resto,2,",", ".")?> para saque.</p>
  </section>

</body>

</html>