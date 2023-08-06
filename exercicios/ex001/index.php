<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <title>Primeiro Código PHP</title>
</head>

<body>



  <div class="container">
    <h1>Vou virar programador!</h1>
    <form method="post">
      <label for="nome" class="label">Nome:</label>
      <input type="text" name="nome" id="nome" required><br>
      <label for="anoNasc" class="label">Ano Nasc:</label>
      <input type="number" name="anoNasc" id="anoNasc" required>
      <fieldset>
        <legend>Sexo:</legend>
        <input type="radio" name="sex" id="masc" value="homem" checked>
        <label for="masc">Masculino</label><br>
        <input type="radio" name="sex" id="fem" value="mulher">
        <label for="fem">Feminino</label>
      </fieldset><br>
      <input type="submit" value="Enviar">
    </form>
    <h3>Resultados:</h3>
    <div class="resp">
      <?php
      
      $nome = isset($_POST["nome"])?$_POST["nome"]:"[Digite um nome]";
      $anoNasc = isset($_POST["anoNasc"])?$_POST["anoNasc"]:1900;
      $sexo = isset($_POST["sex"])?$_POST["sex"]:"[Informe um sexo]";
      $idadeAtual = date("Y") - $anoNasc;
      
    
        echo "<p>Olá $nome você nasceu em $anoNasc, é $sexo e possui $idadeAtual anos!</p> ";       
    
      ?>

    </div>
  </div>

</body>

</html>