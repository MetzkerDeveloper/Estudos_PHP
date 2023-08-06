<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafios PHP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php 
  $dividendo = $_GET['d1'] ?? 0;
  $divisor = $_GET['d2'] ?? 1;


?>
  <main>
    <h1>Anatomia de uma divisão</h1>
    <form action="" method="get">
      <label for="d1">Dividendo</label>
      <input type="number" name="d1" id="" value="<?=$dividendo?>">
      <label for="d2">Divisor</label>
      <input type="number" name="d2" id="" value="<?=$divisor?>">
      <input type="submit" value="Analistar">

    </form>
  </main>
  <section>
    <h2>Estrutura da divisão</h2>
    <?php 
    //Calculos
    
    $quociente = intdiv($dividendo,$divisor);
    $resto = $dividendo % $divisor;
    
    /*echo "<ul>";
    echo "<li>Dividendo: $dividendo</li>";
    echo "<li>Divisor: $divisor</li>";
    echo "<li>Quoaciente: $quociente</li>";
    echo "<li>Resto: $resto</li>";
    echo "</ul>";*/
?>
    <table class="divisao">
      <tr>
        <td><?=$dividendo?></td>
        <td><?=$divisor?></td>
      </tr>
      <tr>
        <td><?=$resto?></td>
        <td><?=$quociente?></td>
      </tr>
    </table>
  </section>
</body>

</html>