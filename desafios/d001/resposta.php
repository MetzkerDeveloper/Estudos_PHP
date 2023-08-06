<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <h1>Resultado Final</h1>
    <p>
      <?php 
      $n = $_REQUEST["num"] ?? 0;
      $a = $n - 1;
      $s = $n + 1;
      echo "O número escolhido foi <strong>$n</strong>";
      echo "<br> O seu antecessor é <strong>$a</strong>";
      echo "<br> O seu sucessor é <strong>$s</strong>";
      ?>
    </p>
    <button onclick="javscript:history.go(-1)">&#x2B05;Voltar</button>
  </main>

</body>

</html>