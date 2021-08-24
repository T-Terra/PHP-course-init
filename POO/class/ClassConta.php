<?php
  class ContaBanco {
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // Método que define o estado inicial da conta
    public function __construct($v) {
      $this->setStatus(false);
      $this->setSaldo(0);
      for ($n=0; $n <= $v; $n++) {
        $this->setNumconta($v);
      }
    }

    public function abrirConta($t) {
      $this->setStatus(true);
      $this->setTipo($t);
      if ($this->getTipo() === "cc") {
        $this->setSaldo(50);
      }
      elseif($this->getTipo() === "cp") {
        $this->setSaldo(150);
      }
    }

    public function fecharConta() {
      if ($this->getSaldo() > 0) {
        echo "<p>Erro! saque todo seu dinheiro antes de fechar a conta!</p>";
      }
      elseif ($this->getSaldo() < 0) {
        echo "verifique se não possuí debito na sua conta!<br>";
      }
      else {
        $this->setStatus(false);
        echo "<p>Conta de {$this->getDono()} fechada com sucesso!!!</p>";
      }
    }

    public function depositar($depo) {
      if ($this->getStatus() === true) {
        $this->setSaldo($this->getSaldo() + $depo);
        echo "<p>Deposito de R$$depo autorizado na conta de {$this->getDono()}</p>";
      }
      else {
        echo "Erro! Abra sua conta antes de fazer um deposito!";
      }
    }

    public function sacar($saque) {
      if ($this->getStatus() === true && $this->getSaldo() >= $saque) {
        $this->setSaldo($this->getSaldo() - $saque);
        echo "<p>Saque de R$$saque autorizado na conta de {$this->getDono()}</p>";
      }
      else {
        echo "<p>Erro! Verifique se sua conta está aberta ou se possuí saldo!</p>";
      }
    }

    public function pagarMensal() {
      if ($this->getStatus() === true) {
        if ($this->getSaldo() > 0 && $this->getTipo() === "cc") {
          $v = 12;
          $this->setSaldo($this->getSaldo() - $v);
          echo "<p>A mensalidade no valor de R$$v foi debitada da conta de {$this->getDono()}</p>";
        }
        elseif ($this->getSaldo() > 0 && $this->getTipo() === "cp") {
          $v = 20;
          $this->setSaldo($this->getSaldo() - $v);
          echo "<p>A mensalidade no valor de R$$v foi debitada da conta de {$this->getDono()}</p>";
        }
        else {
          echo "Erro! ao pagar a mensalidade!!!";
        }
      } else {
        echo "A conta está fechada, abra a conta antes de pagar a mensalidade!";
      }
    }
    //setters methods
    public function setNumconta($n) {
      $this->numConta = $n;
    }
    public function setTipo($t) {
      $this->tipo = $t;
    }
    public function setDono($d) {
      $this->dono = $d;
    }
    public function setSaldo($s) {
      $this->saldo = $s;
    }
    public function setStatus($stat) {
      $this->status = $stat;
    }

    //getters methods
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