<?php
class Carro {
    public $marca;
    public $modelo;
    private $velocidade = 0;
    
    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    
    public function acelerar($valor) {
        $this->velocidade += $valor;
    }
    
    public function frear($valor) {
        $this->velocidade = max(0, $this->velocidade - $valor);
    }
    
    public function velocidadeAtual() {
        echo "Velocidade: " . $this->velocidade . " km/h<br>";
    }
}

$meuCarro = new Carro("Fiat", "Uno");
$meuCarro->acelerar(50);
$meuCarro->velocidadeAtual();
?>