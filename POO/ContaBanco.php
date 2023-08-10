<?php 

class ContaBanco{
  // atributos
  public $numConta;
  protected $tipo;
  private $dono;
  private $saldo;
  private $status;

  // Metodos

  public function abrirConta($tipo)
  {
    $this->setTipo($tipo);
    $this->setStatus(true);
    if($tipo == "CC")
    {
      $this->setSaldo(50);
    }elseif($tipo == "CP")
    {
      $this->setSaldo(150);
    }
  }

  public function fecharConta()
  {
    if($this->getSaldo() > 0)
    {
      echo "<p>Conta ainda possui dinheiro. Não posso fechá-la!</p>";
    }elseif($this->getSaldo() < 0 )
    {
      echo "<p>Conta está em débito. Impossível encerrar!</p>";
    }else
    {
      $this->setSaldo(false);
      echo "<p>Conta de {$this->getDono()} fechada com sucesso!</p>";
    }
  }

  public function depositar($valor)
  {
    if($this->getStatus()){
      $this->setSaldo($this->getSaldo() + $valor);
      echo "<p>Depósito de $valor autorizado na conta de ". $this->getDono() ." !</p>";
    }else
    {
      echo "<p>Conta fechada, não consigo depositar!</p>";
    }
  }
  
  public function sacar($valor)
  {
    if($this->getStatus())
    {
      if($this->getSaldo() >= $valor){
        $this->setSaldo($this->getSaldo()- $valor);
        echo "<p>Saque de $valor autorizado na conta de ". $this->getDono() ." !</p>";
      }else
      {
        echo "<p>Saldo insuficiente para saque!</p>";
      }
    }else 
    {
      echo "<p>Não posso sacar de uma conta fechada!</p>";
    }
  }

  public function pagarMensal()
  {
    if($this->getTipo() == "CC")
    {
      $valorDebito = 12;
    }elseif ($this->getTipo() == "CP") {
      $valorDebito = 20;
    }
    
    if($this->getStatus())
    {
      $this->setSaldo($this->getSaldo() - $valorDebito);
      echo "<p>Mensalidade de R\$ $valorDebito debitada na conta de ". $this->getDono() ." !</p>";
    }else
    {
      echo "<p>Problemas com a conta, não posso cobrar!</p>";
    }
  }

  //metodos especiais
  
  public function __construct()
  {
    $this->setSaldo(0);
    $this->setStatus(false);
    echo "<p>Conta criada com sucesso!</p>";
  }

  public function setNumConta($numConta)
  {
    $this->numConta = $numConta;
  }
  
  public function setTipo($tipo)
  {
    $this->tipo = $tipo;
    
  }

  public function setDono($dono)
  {
    $this->dono = $dono;
  }

  public function setSaldo($saldo)
  {
    $this->saldo = $saldo;
  }
  public function setStatus($status)
  {
    $this->status = $status; 
  }

  public function getNumConta()
  {
    return $this->numConta;
  }

  public function getTipo()
  {
    return $this->tipo;
  }
  
  public function getDono()
  { 
    return $this->dono;
  }
  
  public function getSaldo()
  { 
    return $this->saldo;
  }
  public function getStatus()
  { 
    return $this->status;
  }
  
  
  
}




?>