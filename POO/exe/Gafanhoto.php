<?php
require_once "Pessoa.php";
class Gafanhoto extends Pessoa {
  private $login;
  private $totAssistido;

  public function __construct($nome, $idade, $sexo, $login) {
    //chama o construtor da classe mãe
    parent::__construct($nome, $idade, $sexo);
    $this->setLogin($login);
    $this->setTotAssistido(0);
  }

  public function viuMaisUm() {
    $this->setTotAssistido($this->getTotAssistido() + 1);
    $this->ganharExp(1);
  }

  protected function ganharExp($n) {
    $this->setExp($this->getExp() + $n);
  }

  //getters
  public function getLogin() {
    return $this->login;
  }
  public function getTotAssistido() {
    return $this->totAssistido;
  }
  //setters
  public function setLogin($u) {
    $this->login = $u;
  }
  public function setTotAssistido($tot) {
    $this->totAssistido = $tot;
  }
}