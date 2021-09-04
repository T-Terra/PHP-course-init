<?php
abstract class Animal {
  private $peso;
  private $idade;
  private $membros;

  abstract public function locomover();
  abstract public function alimentar();
  abstract public function emitirSom();

}