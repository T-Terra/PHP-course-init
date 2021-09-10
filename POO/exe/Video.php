<?php
require_once "./AcoesVideo.php";
class Video implements AcoesVideo {
  //atributos
  private $titulo;
  private $avaliacao;
  private $views;
  private $curtidas;
  private $reproduzindo;

  public function __construct($titulo) {
    $this->setTitulo($titulo);
    $this->setViews(1);
    $this->setAvaliacao(1);
    $this->setCurtidas(0);
    $this->setReproduzindo(false);
  }

  //métodos
  public function play() {
    $this->setReproduzindo(true);
  }
  public function pause() {
    $this->setReproduzindo(false);
  }
  public function like() {
    $this->setCurtidas($this->getCurtidas() + 1);
  }
  //getters
  public function getTitulo() {
    return $this->titulo;
  }
  public function getAvaliacao() {
    return $this->avaliacao;
  }
  public function getViews() {
    return $this->views;
  }
  public function getCurtidas() {
    return $this->curtidas;
  }
  public function getReproduzindo() {
    return $this->reproduzindo;
  }
  //setters
  public function setTitulo($t) {
    $this->titulo = $t;
  }
  public function setAvaliacao($a) {
    $media = ($this->avaliacao + $a) / $this->views;
    $this->avaliacao = $media;
  }
  public function setViews($v) {
    $this->views = $v;
  }
  public function setCurtidas($c) {
    $this->curtidas = $c;
  }
  public function setReproduzindo($r) {
    $this->reproduzindo = $r;
  }

}