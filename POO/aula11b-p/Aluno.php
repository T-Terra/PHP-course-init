<?php
require_once "Pessoa.php";
class Aluno extends Pessoa {
  private $matr;
  private $curso;

  public function pagarMensal() {
    echo "<p>Pagando mensalidade do aluno {$this->getNome()}</p>";
  }

  //getters
  public function getMatr() {
    return $this->matr;
  }
  public function getCurso() {
    return $this->curso;
  }

  //setters
  public function setMatr($m) {
    $this->matr = $m;
  }
  public function setCurso($c) {
    $this->curso = $c;
  }

}