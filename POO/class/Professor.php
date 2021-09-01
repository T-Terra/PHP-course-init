<?php
require_once "../class/Pessoa.php";

class Professor extends Pessoa {
  private $especialidade;
  private $salario;

  public function receberAum($aum) {
    $this->setSalario($this->getSalario() + $aum);
  }

  //getters
  public function getEspecialidade() {
    return $this->especialidade;
  }
  public function getSalario() {
    return $this->salario;
  }

  //setters
  public function setEspecialidade($e) {
    $this->especialidade = $e;
  }
  public function setSalario($s) {
    $this->salario = $s;
  }
}