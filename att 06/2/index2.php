<?php
class Triangulo {
    public $lado1;
    public $lado2;
    public $lado3;
    
    public function __construct($a, $b, $c) {
        $this->lado1 = $a;
        $this->lado2 = $b;
        $this->lado3 = $c;
    }
    
    public function valido() {
        return ($this->lado1 + $this->lado2 > $this->lado3) &&
               ($this->lado1 + $this->lado3 > $this->lado2) &&
               ($this->lado2 + $this->lado3 > $this->lado1);
    }
    
    public function area() {
        if(!$this->valido()) return 0;
        
        $s = ($this->lado1 + $this->lado2 + $this->lado3)/2;
        return sqrt($s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado3));
    }
}

$tri = new Triangulo(3, 4, 5);
echo "Área: " . $tri->area() . "<br>";
?>