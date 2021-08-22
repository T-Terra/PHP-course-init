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
      $this->saldo = 0;
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
      if ($this->saldo === 0) {
        $this->status = false;
        echo "Conta fechada com sucesso!!!";
      }
      else{
        echo "<br>Erro! saque todo seu dinheiro antes de fechar a conta!<br>e verifique se não possuí debito.<br>";
      }
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
      if ($this->saldo > 0 && $this->tipo === "cc") {
        $this->saldo -= 12;
      }
      elseif ($this->saldo > 0 && $this->tipo === "cp") {
        $this->saldo -= 20;
      }
      else {
        echo "Erro! ao pagar a mensalidade!!!";
      }
    }

    //getters method
    public function getNumconta() {
      return $this->numConta;
    }
    public function getTipo() {
      return $this->tipo;
    }
    public function getDono() {
      return $this->dono;
    }
    public function getSaldo() {
      return $this->saldo;
    }
    public function getStatus() {
      return $this->status;
    }
  
  }