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
$v= array("nome"=> "Ana",
          "idade"=> 23,
          "peso"=>65.5
);
foreach($v as $k => $c ){
  echo "O campo $k possui o conteúdo: $c <br>";
}



?>
  </pre>

  </div>
</body>

</html>