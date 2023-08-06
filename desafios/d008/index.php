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
 
  $numero = $_GET['num'] ??1;
  
  ?>
  <main>
    <h1>Informe um número</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="num">Número:</label>
      <input type="number" name="num" id="num" value="<?=$numero?>" step="0.01">
      <input type="submit" value="Calcular Raizes">

    </form>
  </main>
  <section>
    <h2>Resultado Final</h2>
    <?php 
      $rq = sqrt($numero);
      $rc = $numero ** (1/3);
      echo"<p>Analisando o número <strong>$numero</strong>, temos:</p>";
      echo "
      <ul>
        <li>A raiz quadrada igual a <strong>". number_format($rq,2,",",".")."</strong></li>
        <li>A raiz cúbica igual a <strong>".number_format($rc,2,",",".")."</strong></li>
      </ul>
      "
    ?>
  </section>
</body>

</html>