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
    <h2>Matriz (Array)</h2>
    <br>
    <pre>
<?php 
$m= array(array(6,4),
          array(8,5),
          array(3,1)
);

$m[0][1] = $m[2][0];


print_r($m);


?>
  </pre>

  </div>
</body>

</html>