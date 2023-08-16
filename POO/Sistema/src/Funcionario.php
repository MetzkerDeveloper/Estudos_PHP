<?php 

class Funcinario extends Pessoa
{
  private string $setor;
  private string $cargo;
  private float $salario;
  
  public function __construct(string $nome,int $idade,string $genero,Endereco $endereco,
  string $setor, string $cargo, float $salario)
  {
    parent::__construct($nome,$idade,$genero,$endereco);
    $this->setor = $setor;
    $this->setCargo($cargo);
    $this->setSalario($salario);
  }
  
  public function setSetor(string $setor) : void {
    $this->setor = $setor;
  }
  public function getSetor() : string {
    return $this->setor;
  }
  public function setCargo(string $cargo):void {
    if(!($this->getSetor())){
      echo "Preenhca um setor para cadastrar o cargo.";
      exit();
    }
    $this->cargo = $cargo;
  }
  public function getCargo():string{
    return $this->cargo;
  }

  private function setSalario(float $salario) : void {
    
    if($salario < 1320){
      echo "Salário abaixo do mínimo, não é possivel cadastrar.";
      exit();
    }
    
    $this->salario = $salario;
  }
  public function getSalario():float {
    return $this->salario;
  }
  public function  setDesconto() : void {
    $this->desconto = 0.10;
   }

   public function __toString(): string
   {
    return "<p>Nome: ".$this->nome .
  "<br>Idade: ". $this->idade . " anos" .
"<br>End: ".$this->endereco->getRua() .", ". $this->endereco->getNumCasa() . 
", " . $this->endereco->getCidade() . " - " . $this->endereco->getUf().
"<br>Setor: " . $this->setor .
"<br>Cargo: " .  $this->cargo . 
"<br>Salario: " . $this->salario ."</p>";
   }
}