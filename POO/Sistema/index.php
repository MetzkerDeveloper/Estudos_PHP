<?php 
require_once "src/Pessoa.php";
require_once "src/Endereco.php";
require_once "src/Funcionario.php";


$endereco = new Endereco('Rua Rocha','Jardim Acacias',
130,'Teofilo Otoni', 'mg','39804008');
//$pessoa = new Pessoa('Waleriano', 23,'Masculino',$endereco);


//print_r($pessoa);

$funcionario = new Funcinario('Waleriano',23,'Masculino',$endereco,'TI','Desenvolvedor',3500);

echo $funcionario->__toString() . PHP_EOL;

echo "Numero de pessoas: " . Pessoa::getNumPessoas() ;