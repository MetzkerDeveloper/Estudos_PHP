<?php 
require_once "Lutador.php";
class Luta 
{
  private $desafiado;
  private $desafiante;
  private int $rounds;
  private bool $aprovada;

  public function marcarLuta($l1,$l2)
  {
    if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
      $this->aprovada = true;
      $this->desafiado = $l1;
      $this->desafiante = $l2;
    }else{
      $this->aprovada = false;
      $this->desafiado = null;
      $this->desafiante = null;
    }
  }
  public function lutar() 
  {
    if($this->aprovada){
      $this->desafiado->apresentar();
      $this->desafiante->apresentar();
      $vencedor =  rand(0,2);
      switch($vencedor){
        case 0: //Empate
          echo "<p>Empate!</p>";
          $this->desafiado->empatarLuta();
          $this->desafiante->empatarLuta();
          break;
          case 1: // Desafiado vence
            echo "<p>".$this->desafiado->getNome() . " venceu! </p>";
            $this->desafiado->ganharLuta();
            $this->desafiante->perderLuta();
            break;
            case 2: // Desafiante vence
              echo "<p>". $this->desafiante->getNome()." venceu! </p>";
              $this->desafiante->ganharLuta();
              $this->desafiado->perderLuta();
              break;
      }
    }else{
      echo "<p>Luta não pode acontecer!</p>";
    }
  }
  
  public function setDesafiado( $desafiado) : void
  {
    $this->desafiado = $desafiado;
  }
  public function getDesafiado ()
  {
    return $this->desafiado;
  }
  public function setDesafiante( $desafiante) : void {
    $this->desafiante = $desafiante;
  }
  public function getDesafiante () 
  {
    return $this->desafiante;
  }
  public function setRounds(int $rounds) : void 
  {
    $this->rounds = $rounds;
  }
  public function getRounds () : int
  {
    return $this->rounds;
  }
  public function setAprovada(bool $aprovada) : void
  {
   $this->aprovada =$aprovada; 
  }
  public function getArovada() : bool
  {
    return $this->aprovada;
  }
}
?>