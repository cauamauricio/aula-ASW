<?php
class Pessoa {
    public $nome;
    public $idade;
    
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    
    public function apresentar() {
        echo "Nome: " . $this->nome . ", Idade: " . $this->idade . "<br>";
    }
}

$pessoa1 = new Pessoa("Ana", 15);
$pessoa2 = new Pessoa("Pedro", 16);

$pessoa1->apresentar();
$pessoa2->apresentar();
?>