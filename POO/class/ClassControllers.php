<?php
  require_once "../aula06b-p/controllers.php";
  class ControleRemoto implements Controlador {
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;

    // Método construtor (é o método que carrega informações padrões) ou um estado padrão 
    public function __construct() {
      $this->setVolume(50);
      $this->setLigado(false);
      $this->setTocando(false);
    }

    // Métodos setters
    private function setVolume($v) {
      $this->volume = $v;
    }
    private function setLigado($l) {
      $this->ligado = $l;
    }
    private function setTocando($t) {
      $this->tocando = $t;
    }

    // Métodos getters
    private function getVolume(){
      return $this->volume;
    }
    private function getLigado() {
      return $this->ligado;
    }
    private function getTocando(){
      return $this->tocando;
    }

  }