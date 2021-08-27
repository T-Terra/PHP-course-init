<?php 
  class Lutador {
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    // Métodos (funções)
    public function apresentar() {
      echo "<p>---------LUTADOR {$this->getNome()}---------</p>";
      echo "Lutador: {$this->getNome()}";
      echo "<br>Nacionalidade: {$this->getNacionalidade()}";
      echo "<br>Idade: {$this->getIdade()}";
      echo "<br>Altura: {$this->getAltura()}";
      echo "<br>Peso: {$this->getPeso()}";
      echo "<br>Categoria: {$this->getCategoria()}";
      echo "<br>Vitórias: {$this->getVitorias()}";
      echo "<br>Derrotas: {$this->getDerrotas()}";
      echo "<br>Empates: {$this->getEmpates()}";
    }

    public function status() {
      
    }

    public function ganharLuta() {
      
    }

    public function perderLuta() {
      
    }

    public function empatarLuta() {
      
    }

    // Método construtor
    public function __construct() {
      $this->setNome("Desconhecido...");
      $this->setNacionalidade("Desconhecida...");
      $this->setIdade(0);
      $this->setAltura(0);
      $this->setPeso(0);
      $this->setCategoria("Desconhecida...");
      $this->setVitorias(0);
      $this->setDerrotas(0);
      $this->setEmpates(0);
    }

    // Métodos getters
    private function getNome() {
      return $this->nome;
    }
    private function getNacionalidade() {
      return $this->nacionalidade;
    }
    private function getIdade() {
      return $this->idade;
    }
    private function getAltura() {
      return $this->altura;
    }
    private function getPeso() {
      return $this->peso;
    }
    private function getCategoria() {
      return $this->categoria;
    }
    private function getVitorias() {
      return $this->vitorias;
    }
    private function getDerrotas() {
      return $this->derrotas;
    }
    private function getEmpates() {
      return $this->empates;
    }
    // Métodos setters
    private function setNome($n) {
      $this->nome = $n;
    }
    private function setNacionalidade($nac) {
      $this->nacionalidade = $nac;
    }
    private function setIdade($ida) {
      $this->idade = $ida;
    }
    private function setAltura($alt) {
      $this->altura = $alt;
    }
    private function setPeso($pe) {
      $this->peso = $pe;
    }
    private function setCategoria($cat) {
      $this->categoria = $cat;
    }
    private function setVitorias($vic) {
      $this->vitorias = $vic;
    }
    private function setDerrotas($der) {
      $this->derrotas = $der;
    }
    private function setEmpates($emp) {
      $this->empates = $emp;
    }

  }