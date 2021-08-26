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

    // Implementação dos métodos da interface
      public function ligar() {
        $this->setLigado(true);
        if ($this->getLigado() === true && $this->getTocando() === false) {
          echo "<p>Tv ligada!!!</p>";
        }
      }
      public function desligar() {
        $this->setLigado(false);
        if ($this->getLigado() === true && $this->getTocando() === true) {
          echo "<p>Tv Desligada!!!</p>";
        }
      }
      public function abrirMenu() {
        echo "<br>-----MENU----";
        echo "<br>Está ligado?: ". ($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está tocando?: ". ($this->getTocando()?"SIM":"NÃO");
        echo "<br>Volume: ". $this->getVolume();
        for ($i=0; $i<= $this->getVolume(); $i+=10) {
          echo "|";
        }
        echo "<br>";
      }
      public function fecharMenu() {
        echo "<p>O Menu foi fechado!</p>";
      
      }
      public function maisVolume() {
        if ($this->getLigado() === true) {
          $this->setVolume($this->getVolume() + 10);
        }
      }
      public function menosVolume() {
        if ($this->getLigado() === true) {
          $this->setVolume($this->getVolume() - 10);
        }
      }
      public function ligarMudo() {
        if ($this->getLigado() === true && $this->getVolume() > 0) {
          $this->setVolume(0);
        }
      }
      public function desligarMudo() {
        if ($this->getLigado() === true && $this->getVolume() === 0) {
          $this->setVolume(50);
        }
      }
      public function play() {
        if ($this->getLigado() === true && $this->getTocando() === false) {
          $this->setTocando(true);
          echo "<p>Tocando!!!>>></p>";
        }
      }
      public function pause() {
        if ($this->getLigado() === true && $this->getTocando() === true) {
          $this->setTocando(false);
          echo "<p>Pausado!!!!>>></p>";
        }
      }

  }