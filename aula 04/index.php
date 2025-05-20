<?php
// Função recursiva para calcular o fatorial
function fatorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * fatorial($n - 1);
    }
}

// Função recursiva para calcular a sequência de Fibonacci
function fibonacci($n) {
    if ($n == 0) return 0;
    if ($n == 1) return 1;
    return fibonacci($n - 1) + fibonacci($n - 2);
}

// Testes das funções
echo "Fatorial de 5: " . fatorial(5) . "\n";         // Saída: 120
echo "Fibonacci na posição 6: " . fibonacci(6) . "\n"; // Saída: 8
?>
