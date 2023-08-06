<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <h1>Trabalhando com numeros aleatórios</h1>
    <?php 
    $min = 0;
    $max = 1000;
    $num = mt_rand($min, $max);
    echo "<p>Gerando um número aleatório entre <strong>$min</strong> e
    <strong>$max</strong>... <br> O valor gerado foi <strong>$num</strong></p>"
    ?>
    <button onclick="javscript:document.location.reload()">&#x1F504;Gerar Outro</button>
  </main>

</body>

</html>