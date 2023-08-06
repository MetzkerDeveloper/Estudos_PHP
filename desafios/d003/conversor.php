<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <h1>Conversor de moedas v.1</h1>
    <p>
      <?php
      // cotação copiada do Google

      $cotacao = 4.79;

      // quanto R$ voce tem
      $real = $_GET["num"] ?? 0;

      $dolar = $real / $cotacao;

      //mostrar resultado na tela
      //echo "Seus R\$ ". number_format($real,2, ",",".") . " equivalem a US\$ " . number_format($dolar,2, ",",".");

      // formatacao de moedas com internacionalizacao!
      // Biblioteca intl(Internallization PHP )
      $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

      echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a  <strong>" . numfmt_format_currency($padrao, $dolar, "USD") ."</strong></p>";
      ?>
    </p>
    <button onclick="javscript:history.go(-1)">&#x2B05;Voltar</button>
  </main>

</body>

</html>