<?php 

class Endereco 
{
  private string $rua;
  private string $bairro;
  private int $numCasa;
  private string $cidade;
  private string $uf;
  private string $cep;

  public function __construct(string $rua, string $bairro, string $numCasa, string $cidade,string $uf, string $cep)
  {
    $this->rua = $rua;
    $this->bairro = $bairro;
    $this->setNumCasa($numCasa);
    $this->cidade = $cidade;
    $this->setUf($uf);
    $this->cep = $cep;
  }

  private function setRua(string $rua): void{
    $this->rua = $rua;
  }
  public function getRua() : string{
    return $this->rua;
  } 
  private function setBairro(string $bairro) : void {
    $this->bairro = $bairro;
  }
  public function getBairro(): string {
    return $this->bairro;
  }
  private function setNumCasa(int $numCasa) : void {
    
    if($numCasa < 0 ){
      echo "Não podemos cadastrar numero da casa negativo, preenhca numero válido";
      exit();
    }
    
    $this->numCasa = $numCasa;
  }
  public function getNumCasa() : int {
    return $this->numCasa;
  }
  private function setCidade(string $cidade) : void {
    $this->cidade = $cidade;
  }
  public function getCidade() : string {
    return $this->cidade;
  }
  private function setUf(string $uf) : void {
    $ufs = ['AC','AL','AP','AM','BA','CE','ES','GO','MA','MT','MS','MG',
    'PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO','DF'];
  
      $uppCaseUf = strtoupper($uf);
      
    if(!(in_array($uppCaseUf,$ufs))){
        echo "Uf inválida. Tente novamente";
        exit();
    }
    $this->uf = $uppCaseUf;
    
  }
  public function getUf() : string {
    return $this->uf;
  }
  private function setCep(string $cep) : void {
    $this->cep = $cep;
  }
  public function getCep() : string {
    return $this->cep;
  }
}


?>