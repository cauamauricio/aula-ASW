<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="att1.css">
    <title>Document</title>
</head>
<body>
<h2>Calculadora</h2>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacao = $_POST["operacao"];
    $resultado = 0;
    
    if ($operacao == "soma") {
        $resultado = $num1 + $num2;
    } elseif ($operacao == "subtracao") {
        $resultado = $num1 - $num2;
    } elseif ($operacao == "multiplicacao") {
        $resultado = $num1 * $num2;
    } elseif ($operacao == "divisao") {
        $resultado = ($num2 != 0) ? $num1 / $num2 : "Erro: divisão por zero!";
    } elseif ($operacao == "resto") {
        $resultado = ($num2 != 0) ? $num1 % $num2 : "Erro: divisão por zero!";
    }
}
?>

<form method="post">
    Número 1: <input type="number" name="num1" required><br>
    Número 2: <input type="number" name="num2" required><br>
    Operação:
    <select name="operacao" required>
        <option value="soma">Soma</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicacao">Multiplicação</option>
        <option value="divisao">Divisão</option>
        <option value="resto">Resto</option>
    </select><br>
    <input type="submit" value="Calcular">
</form>

<?php if (isset($resultado)): ?>
    <h3>Resultado: <?php echo $resultado; ?></h3>
<?php endif; ?>
</body>
</html>