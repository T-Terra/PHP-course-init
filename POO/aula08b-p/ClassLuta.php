<?php
  require_once "../class/ClassUfc.php";
  class Luta {
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //Métodos
    public function marcarLuta($l1, $l2) {
      if ($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) {
        $this->setAprovada(true);
        $this->setDesafiado($l1);
        $this->setDesafiante($l2);
      } else {
        $this->setAprovada(false);
        $this->setDesafiado(null);
        $this->setDesafiante(null);
      }
    }
    public function lutar() {
      if ($this->getAprovada()) {
        $this->getDesafiado()->apresentar();
        $this->getDesafiante()->apresentar();
        $vencedor = rand(0,2);
        switch ($vencedor) {
          case 0: //empate
            echo "<p>Empatou!</p>";
            $this->desafiado->empatarLuta();
            $this->desafiante->empatarLuta();
            break;
          case 1: //L1
            echo "<p>{$this->desafiado->getNome()} Venceu a Luta!!</p>";
            $this->desafiado->ganharLuta();
            $this->desafiante->perderLuta();
            break;
          case 2://L2
            echo "<p>{$this->desafiante->getNome()} Venceu a Luta!!</p>";
            $this->desafiante->ganharLuta();
            $this->desafiado->perderLuta();
            break;
        }
      } else {
        echo "<p>Esta luta não pode acontecer!</p>";
      }
    }

    //Métodos setters
    private function setDesafiado($dd) {
      $this->desafiado = $dd;
    }
    private function setDesafiante($df) {
      $this->desafiante = $df;
    }
    private function setRounds($r) {
      $this->rounds = $r;
    }
    private function setAprovada ($a) {
      $this->aprovada = $a;
    }

    //Métodos getters
    private function getDesafiado() {
      return $this->desafiado;
    }
    private function getDesafiante() {
      return $this->desafiante;
    }
    private function getRounds() {
      return $this->rounds;
    }
    private function getAprovada () {
      return $this->aprovada;
    }
  }