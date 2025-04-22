<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="att1.css">
    <title>Document</title>
</head>
<body>

<form method="post">
    Digite 5 números inteiros:
    <input type="number" name="n1" required>
    <input type="number" name="n2" required>
    <input type="number" name="n3" required>
    <input type="number" name="n4" required>
    <input type="number" name="n5" required>
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = [
        $_POST["n1"],
        $_POST["n2"],
        $_POST["n3"],
        $_POST["n4"],
        $_POST["n5"]
    ];

    echo "<h2>Você digitou os seguintes números:</h2>";
    foreach ($numeros as $numero) {
        echo "<p>$numero</p>";
    }
}
?>

</body>
</html>