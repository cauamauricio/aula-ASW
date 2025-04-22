<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="att1.css">
    <title>Document</title>
</head>
<body>

<h2>Calcular Área do Retângulo</h2>

<form method="post">
    <label for="largura">Largura do Retângulo:</label>
    <input type="number" name="largura" id="largura" min ="0" required>

    <label for="altura">Altura do Retângulo:</label>
    <input type="number" name="altura" id="altura" min="0" required>

    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $largura = $_POST["largura"];
    $altura = $_POST["altura"];

    function AR($largura, $altura) {
        return $largura * $altura;
    }

    $area = AR($largura, $altura);

    echo "<h3>A área do retângulo é: $area</h3>";
}
?>

</body>
</html>