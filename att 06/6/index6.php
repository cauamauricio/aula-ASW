<?php
class Produto {
    public $nome;
    public $preco;
    public $quantidade;
    
    public function valorTotal() {
        return $this->preco * $this->quantidade;
    }
    
    public function disponivel() {
        return $this->quantidade > 0;
    }
}

$prod = new Produto();
$prod->preco = 10;
$prod->quantidade = 5;
echo "Total: R$ " . $prod->valorTotal() . "<br>";
?>