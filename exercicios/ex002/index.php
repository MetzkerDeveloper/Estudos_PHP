<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style002.css">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="shortcut icon" href="favicon-32x32.png" />
  <title>Calculadora IMC - PHP</title>
</head>

<body>
  <div class="container">
    <h2>Calculadora IMC - PHP </h2>
    <form method="post">
      <label for="name">Nome:</label>
      <input type="text" name="name" id="name" placeholder="Digite seu nome" required>
      <label for="peso">Peso:</label>
      <input type="text" name="peso" id="peso" placeholder="Insira seu peso" required>
      <label for="altura">Altura:</label>
      <input type="text" name="altura" id="altura" placeholder="Insira sua altura :  1.50" required>
      <input type="submit" id="btn" value="Calcular">
    </form>

    <div class="result">
      <fieldset>
        <legend>Resultado:</legend>
        <?php 
        $nome = isset($_POST["name"]) ? $_POST["name"] : "[Digite um nome]";
        $peso = isset($_POST["peso"]) ? $_POST["peso"] : 100;
        $altura = isset($_POST["altura"]) ? $_POST["altura"] : 180;
        $imcCalc = $peso / (pow($altura,2));
        $imcResult = round($imcCalc,2);
        
        
        if($imcResult < 16.9){
          echo "Olá $nome, de acordo com seu peso de $peso kg  e sua altura de $altura m, seu IMC é de $imcResult .<br>
          Conforme a OMS você está muito abaixo do peso. Procure um nutricionista.";
        }elseif($imcResult > 16.9  && $imcResult < 18.4 ){
          echo "Olá $nome, de acordo com seu peso de $peso kg  e sua altura de $altura m, seu IMC é de $imcResult .<br>
          Conforme a OMS você está abaixo do peso. Procure um nutricionista.";
        }elseif($imcResult > 18.5  && $imcResult < 24.9 ){
          echo "Olá $nome, de acordo com seu peso de $peso kg e sua altura de $altura m, seu IMC é de $imcResult .<br>
          Conforme a OMS você está com o peso normal.";
        }elseif ($imcResult > 24.9  && $imcResult < 29.9) {
          echo "Olá $nome, de acordo com seu peso de $peso kg e sua altura de $altura m, seu IMC é de $imcResult .<br>
          Conforme a OMS você está acima do peso.";
        }elseif ($imcResult > 29.9  && $imcResult < 34.9) {
          echo "Olá $nome, de acordo com seu peso de $peso kg e sua altura de $altura m, seu IMC é de $imcResult .<br>
          Conforme a OMS você está com Obesidade grau I.";
        }elseif ($imcResult > 34.9  && $imcResult < 40) {
          echo "Olá $nome, de acordo com seu peso de $peso kg e sua altura de $altura m, seu IMC é de $imcResult .<br>
          Conforme a OMS você está com Obesidade grau II.";
        }elseif ($imcResult > 40) {
          echo "Olá $nome, de acordo com seu peso de $peso kg e sua altura de $altura m, seu IMC é de $imcResult .<br>
          Conforme a OMS você está com Obesidade grau III.";
        }else{
          echo "Preenhca as informações";
        }
        ?>
      </fieldset>
    </div>
  </div>
</body>

</html>