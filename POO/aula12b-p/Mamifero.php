<?php
require_once "./Animal.php";
class Mamifero extends Animal {
  private $corPelo;

  public function locomover() {
    echo "Locomovendo!";
  }

  public function alimentar() {
    echo "Alimentando!";
  }

  public function amitirSom() {
    echo "Emitindo som!";
  }
}