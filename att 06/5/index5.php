<?php
class Aluno {
    public $nome;
    public $matricula;
    public $notas = [];
    
    public function media() {
        return array_sum($this->notas) / count($this->notas);
    }
    
    public function situacao() {
        $media = $this->media();
        return $media >= 6 ? "Aprovado" : "Reprovado";
    }
}

$aluno1 = new Aluno();
$aluno1->notas = [7, 8, 6];
echo $aluno1->situacao() . "<br>";
?>