<?php
require_once "../class/Pessoa.php";

class Funcionario extends Pessoa {
  private $setor;
  private $trabalhando;

  public function mudarTrabalho() {
    $this->trabalhando = ! $this->trabalhando;
  }

  //getters
  public function getSetor() {
    return $this->setor;
  }
  public function getTrabalhando() {
    return $this->trabalhando;
  }

  //setters
  public function setSetor($s) {
    $this->setor = $s;
  }
  public function setTrabalhando($t) {
    $this->trabalhando = $t;
  }
}