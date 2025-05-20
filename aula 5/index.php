<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php
class ContaBancaria {
public $titular;
 public $saldo;

 public function __construct($titular, $saldo = 0) {
        $this->titular = $titular;
        $this->saldo = $saldo;
 }

 public function depositar($valor) {
        $this->saldo += $valor;
        echo "Depósito de R$$valor realizado. Saldo atual: R$" . $this->saldo . "<br>";
}

    public function sacar($valor) {
     if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$$valor realizado. Saldo atual: R$" . $this->saldo . "<br>";
     } else {
            echo "Saldo insuficiente para sacar R$$valor. Saldo atual: R$" . $this->saldo . "<br>";
    }
 }
}

$conta = new ContaBancaria("Cauã");
$conta->depositar(500);
$conta->sacar(600);
$conta->sacar(400);
?>

</body>
</html>
