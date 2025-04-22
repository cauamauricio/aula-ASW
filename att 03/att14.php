<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="att1.css">
    <title>Document</title>
</head>
<body>

<h2>Função Soma</h2>

<form method="post">
    Digite o primeiro número: 
    <input type="number" name="n1" required>

    Digite o segundo número: 
    <input type="number" name="n2" required>
    
    <input type="submit" value="Calcular Soma">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
error_reporting(E_ALL);
ini_set('display_errors', 1);

function soma($x, $y) {
    return $x + $y;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["n1"];
    $num2 = $_POST["n2"];
    
    $resultado = soma($num1, $num2);
    echo "<h3>A soma de $num1 + $num2 é: $resultado</h3>";
}
?>

</body>
</html>