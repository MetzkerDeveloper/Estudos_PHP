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
    <h2>Vetores e Matriz (Array)</h2>
    <pre>
<?php 
$v = array(
  3=>5,
  1=>9,
  0=>8,
  2=>7,
);

unset($v[0]); #serve para remove o indice do array

print_r($v);



?>
  </pre>

  </div>
</body>

</html>