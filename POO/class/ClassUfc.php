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

    // Método construtor
    public function __construct($no, $na, $ida, $al, $pe, $vi, $de, $em) {
      $this->setNome($no);
      $this->setNacionalidade($na);
      $this->setIdade($ida);
      $this->setAltura($al);
      $this->setPeso($pe);
      $this->setVitorias($vi);
      $this->setDerrotas($de);
      $this->setEmpates($em);
    }
    
    // Métodos (funções)
    public function apresentar() {
      echo "<p>---------LUTADOR {$this->getNome()}---------</p>";
      echo "Lutador: {$this->getNome()}";
      echo "<br>Nacionalidade: {$this->getNacionalidade()}";
      echo "<br>Idade: {$this->getIdade()} anos";
      echo "<br>Altura: {$this->getAltura()}m de altura";
      echo "<br>Peso: {$this->getPeso()}Kg";
      echo "<br>Categoria: {$this->getCategoria()}";
      echo "<br>Vitórias: {$this->getVitorias()}";
      echo "<br>Derrotas: {$this->getDerrotas()}";
      echo "<br>Empates: {$this->getEmpates()}";
    }

    public function status() {
      echo "<p>-----STATUS-----</p>";
      echo "{$this->getNome()}";
      echo "<br>É um peso {$this->getCategoria()}";
      echo "<br>Vitórias: {$this->getVitorias()}";
      echo "<br>Derrotas: {$this->getDerrotas()}";
      echo "<br>Empates: {$this->getEmpates()}";
    }

    public function ganharLuta() {
      $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta() {
      $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta() {
      $this->setEmpates($this->getEmpates() + 1);
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
      $this->setCategoria();
    }
    private function setCategoria() {
      //$this->categoria = $cat;
      if ($this->getPeso() <= 52.2){
        $this->categoria = "INVÁLIDO!";
      } elseif ($this->getPeso() <= 70.3) {
        $this->categoria = "LEVE";
      } elseif ($this->getPeso() <= 83.9) {
        $this->categoria = "MÉDIO";
      } elseif ($this->getPeso() <= 120.2) {
        $this->categoria = "PESADO";
      } else {
        $this->categoria = "INVÁLIDO!";
      }
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