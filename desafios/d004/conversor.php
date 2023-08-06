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
    <h1>Conversor de moedas v.2</h1>
    <p>
      <?php
      
     $inicio = date("m-d-Y" , strtotime("-7 days")); 
     $fim = date("m-d-Y");
     $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
     
     $dados = json_decode(file_get_contents($url),true);
     //cotacao via api do banco central
     $cotacao = $dados["value"][0]["cotacaoCompra"];

      // quanto R$ voce tem
      $real = $_GET["num"] ?? 0;

      $dolar = $real / $cotacao;

      //mostrar resultado na tela
      //echo "Seus R\$ ". number_format($real,2, ",",".") . " equivalem a US\$ " . number_format($dolar,2, ",",".");

      // formatacao de moedas com internacionalizacao!
      // Biblioteca intl(Internallization PHP )
      $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

      echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a  <strong>" . numfmt_format_currency($padrao, $dolar, "USD") ."</strong></p>";
      echo "<p>*Cotação realizada através do valor fornecido pelo <strong>Banco Central</strong></p>";      
      ?>
    </p>
    <button onclick="javscript:history.go(-1)">&#x2B05;Voltar</button>
  </main>

</body>

</html>