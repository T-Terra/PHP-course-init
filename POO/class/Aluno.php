<?php
require_once "../class/Pessoa.php";
class Aluno extends Pessoa {
  private $matr;
  private $curso;

  public function cancelarmatr() {
    echo "<p>A matricula será cancelada!</p>";
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