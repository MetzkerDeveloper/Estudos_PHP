<?php 
class Lutador 
{
  private string $nome;
  private string $nacionalidade;
  private int $idade;
  private float $altura;
  private float $peso;
  private string $categoria;
  private int $vitorias;
  private int $derrotas;
  private int $empates;
  
  public function apresentar()
  {
    echo "<p>-----------------------------------</p>";
    echo "<p> CHEGOU A HORA ! " . $this->getNome();
    echo " veio diretamente de " . $this->getNacionalidade();
    echo " tem " . $this->getIdade() . " anos e pesa ". $this->getPeso() ." KG";
    echo "<br>Ele tem " . $this->getVitorias() . " vitórias ";
    echo $this->getDerrotas() .  " derrotas e " . $this->getEmpates() . " empates </p>";
  }
  public function status()
  {
    echo "<p>----------------------------------</p>";
    echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
    echo "e já ganhou " . $this->getVitorias() . " vezes, ";
    echo " perdeu " . $this->getDerrotas() . " vezes e ";
    echo "empatou " . $this->getEmpates() . " vezes! </p>";
  }
  public function ganharLuta()
  {
    $this->setVitorias($this->getVitorias() + 1);
  }
  
  public function perderLuta()
  {
    $this->setDerrotas($this->getDerrotas() + 1);
  }
  public function empatarLuta()
  {
    $this->setEmpates($this->getEmpates()  +1);
  }
  
  public function __construct(string $no,string $na,int $id, float $al, float $pe, int $vi, int $de, int $em)
  {
    $this->nome = $no;
    $this->nacionalidade = $na;
    $this->idade = $id;
    $this->altura = $al;
    $this->setPeso($pe);
    $this->vitorias = $vi;
    $this->derrotas = $de;
    $this->empates = $em;
  }
  
  public function setNome(string $nome) : void
  {
    $this->nome = $nome;
  }
  public function getNome() : string
  {
    return $this->nome;
  }  
  public function setNacionalidade(string $nacionalidade) : void 
  {
    $this->nacionalidade = $nacionalidade;
  }
  public function getNacionalidade(): string
  {
    return $this->nacionalidade;
  }
  public function setIdade(int $idade) : void 
  {
    $this->idade = $idade;
  }
  public function getIdade() : int 
  {
    return $this->idade;
  }
  public function setAltura(float $altura) : void 
  {
    $this->altura = $altura;
  }
  public function getAltura() :float
  {
    return $this->altura;
  }
  public function setPeso(float $peso) :void 
  {
    $this->peso = $peso;
    $this->setCategoria();
  }
  public function getPeso():float
  {
    return $this->peso;
  }
  private function setCategoria() :void
  {
    if($this->peso < 52.2)
    {
      $this->categoria = "Inválido";
    } elseif ($this->peso <= 70.3){
      $this->categoria = "Leve";
    }elseif($this->peso <= 83.9){
      $this->categoria = "Médio";
    }elseif ($this->peso <= 120.2) {
      $this->categoria = "Pesado";
    }else{
      $this->categoria = "Inválida";
    }
  }
  public function getCategoria() : string 
  {
    return $this->categoria;
  }
  public function setVitorias(int $vitorias) : void 
  {
    $this->vitorias = $vitorias;
  }
  public function getVitorias() : int 
  {
    return $this->vitorias;
  }
  public function setDerrotas(int $derrotas) : void 
  {
    $this->derrotas = $derrotas;
  }
  public function getDerrotas() : int 
  {
    return $this->derrotas;
  }
  public function setEmpates(int $empates) : void 
  {
    $this->empates = $empates;
  }
  public function getEmpates() : int 
  {
    return $this->empates;
  }
}
?>