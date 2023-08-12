<?php 
require_once "Controlador.php";
class ControleRemoto implements Controlador
{
  private int $volume;
  private bool $ligado;
  private bool $tocando;
  
  public function __construct()
  {
    $this->volume = 50;
    $this->ligado = false;
    $this->tocando = false;
  }
  private function setVolume(int $volume):void
  {    
    $this->volume = $volume;
  }
  private function getVolume() : int
  {
    return $this->volume;
  }
  private function setLigado(bool $ligado) : void 
  {
    $this->ligado = $ligado;
  }
  private function getLigado() : bool
  {
    return $this->ligado;    
  }
  private function setTocando(bool $tocando) : void
  {
    $this->tocando = $tocando;
  }
  private function getTocando() : bool
  {
    return $this->tocando;
  }
  
  public function ligar()
  {
    $this->setLigado(true);
    $this->setVolume(50);
  }
  public function desligar()
  {
    $this->setLigado(false);
    $this->setVolume(0);
  } 
  public function abrirMenu()
  {
    echo "<p>-----Menu-----</p>";
    echo "<br> Está ligado?: " . ($this->getLigado()?"SIM":"NÃO");
    echo "<br> Está tocando?: " . ($this->getTocando()?"SIM":"NÃO");
    echo "<br> Volume: " . $this->getVolume();
    for($i =0; $i < $this->getVolume(); $i+=10){
      echo " |";
    }
    echo "<br>";
  }
  public function fecharMenu()
  {
    echo "<br> Fechando o Menu...";
  }
  public function maisVolume()
  {
    if($this->getLigado() && $this->getVolume() < 100){
      $this->setVolume($this->getVolume() + 5 );
    }
  }
  public function menosVolume()
  {
    if($this->getLigado() && $this->getVolume() > 0){
      $this->setVolume($this->getVolume() - 5);
    }
  }
  public function ligarMudo()
  {
    if($this->getLigado() && $this->getVolume() > 0){
      $this->setVolume(0);
    }
  }
  public function desligarMudo()
  {
    if($this->getLigado() && $this->getVolume() == 0){
      $this->setVolume(50);
    }
  }
  public function play()
  {
    if($this->getLigado() && !($this->getTocando())){
      $this->setTocando(true);
    }
  }
  public function pause()
  {
    if($this->getLigado() && $this->getTocando()){
      $this->setTocando(false);
    }
  }
}
?>