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
      $this->status = false;
      if ($this->tipo === "cc") {
        $this->saldo = 50;
      }
      elseif($this->tipo === "cp") {
        $this->saldo = 150;
      }
    }

    public function abrirConta() {
      $this->status = true;
    }

    public function fecharConta() {
      $this->status = false;
    }

    public function depositar($depo) {
      if ($this->status === true) {
        $this->saldo += $depo;
      }
      else {
        echo "Erro! Abra sua conta antes de fazer um deposito!";
      }
    }

    public function sacar($saque) {
      if ($this->status === true && $this->saldo >= $saque) {
        $this->saldo -= $saque;
      }
      else {
        echo "Erro! Verifique se sua conta está aberta ou se possuí saldo!<br>";
      }
    }

    public function pagarMensal() {

    }

    public function getSaldo() {
      return $this->saldo;
    }
  }