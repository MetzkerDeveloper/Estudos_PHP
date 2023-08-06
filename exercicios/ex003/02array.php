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
    <table border="1" style="font-size:3em;">
      <tr>

        <pre>
    <?php
    $c= range(5,20,2);
    foreach($c as $valor){
      echo"<td>$valor </td> ";
    };
    ?>
</pre>
      </tr>
    </table>
  </div>
</body>

</html>