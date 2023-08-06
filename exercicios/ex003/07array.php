<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style003.css">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="shortcut icon" href="img/favicon-32x32.png" />
  <title>vetores e matrizes</title>
</head>

<body>
  <div class="container">
    <h2>Array</h2>
    <br>
    <pre>
      <?php 
 $n = array(3,5,8,2,1,9,7,6);
 echo"O vetor tem ".count($n)." elementos. <br>";
   print_r($n);
 array_push($n,10); # serve para acrescentar um elemento no fim do vetor
 print_r($n);
 array_pop($n); # serve para remover o ultimo elemento do vetor
 print_r($n);
 array_unshift($n,4); # serve para acrescentar um elemento no inicio do vetor
 print_r($n);
 array_shift($n); #serve para remover o primeiro elemento do vetor
 print_r($n);
 #array push e array pop é especifico para tratamento de pilha
?>
      </pre>
  </div>

</body>

</html>