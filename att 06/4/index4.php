<?php
class Retangulo {
    public $largura;
    public $altura;
    
    public function __construct($l, $a) {
        $this->largura = $l;
        $this->altura = $a;
    }
    
    public function area() {
        return $this->largura * $this->altura;
    }
    
    public function perimetro() {
        return 2 * ($this->largura + $this->altura);
    }
}

$ret = new Retangulo(5, 3);
echo "Área: " . $ret->area() . "<br>";
?>