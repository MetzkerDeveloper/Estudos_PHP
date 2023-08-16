<?php

abstract class Pessoa
{
  protected string $nome;
  protected int $idade;
  protected string $genero;
  protected Endereco $endereco;
  protected float $desconto;
  private static int $numDePessoas = 0;
  
  public function __construct(string $nome, int $idade, string $genero, Endereco $endereco)
  {
    $this->setNome($nome);
    $this->setIdade($idade);
    $this->setGenero($genero);
    $this->endereco = $endereco;
    $this->setDesconto();
    self::$numDePessoas++; 
  }

  public static function getNumPessoas() : int {
    return self::$numDePessoas;
  }
  public function setNome(string $nome) : void {
    $this->nome = strtoupper($nome);
  }
  public function getNome():string{
    return $this->nome;
  }
  public function setIdade(int $idade) : void {
    if(($idade < 0 ) || ($idade > 110)){
      echo "Idade inválida !";
      exit();
    }
    $this->idade = $idade;    
  }
  public function getIdade() : int {
    return $this->idade;
  }
  public function setGenero(string $genero) : void {
    $gen = ['Masculino', 'Feminino'];

    if(!(in_array($genero,$gen))){
      echo "Genero não existe, informe uma opção válida";
      exit();
    }
    
    $this->genero = $genero;
  }
  public function getGenero(): string {
    return $this->genero;
  }

  protected abstract function setDesconto():void; 
  // quando declaro um metodo abstrato
 // tenho que declarar a clase como abastract também
 // e para que seja visivel nas classes filhas tenho que mudar a visibilidade para protected
  
  public function getDesconto() : float {
    return $this->desconto;
  }

  public abstract function __toString():string;
  
}