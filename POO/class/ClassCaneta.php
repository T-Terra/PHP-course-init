<?php
  class Caneta { //Objeto molde
    //Atributos
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    //Métodos
    function rabiscar() {
      if ($this->tampada == true) {
        echo "<p>ERRO! Não posso rabiscar está tampada</p>";
      }
      else {
        echo "<p>Estou rabiscando...</p>";
      }
    }

    function tampar() {
      $this->tampada = true;

    }

    function destampar() {
      $this->tampada = false;
    }

  }

class Cachorro { //Objeto molde
  //Atributos
  var $cor;
  var $peso;
  var $raca;
  var $late;

  //Métodos
  function iscachorro() {
    if ($this->late == true) {
      echo "<p>É um cachorro!</p>";
    }
    else {
      echo "<p>Não! é um cachorro!</p>";
    }
  }

  function latir() {
    $this->late = true;
    echo "<p>AUAUAUAUA!</p>";
  }

}