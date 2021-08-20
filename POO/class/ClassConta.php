<?php
  class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // Método que define o estado inicial da conta
    public function __construct($nome, $t, $nConta) {
      $this->dono = $nome;
      $this->tipo = $t;
      $this->numConta = $nConta;

      if ($this->tipo === "cc") {
        $this->saldo = 50;
      }
      elseif($this->tipo === "cp") {
        $this->saldo = 150;
      }

      $this->abrirConta();
    }

    public function abrirConta() {
      $this->status = true;
    }

    public function fecharConta() {
      $this->status = false;
    }

    public function depositar() {
      $this->abrirConta();
    }

    public function sacar() {

    }

    public function pagarMensal() {

    }

    public function getSaldo() {
      return $this->saldo;
    }
  }