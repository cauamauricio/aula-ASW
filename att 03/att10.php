<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="att1.css">
    <title>Document</title>
</head>
<body>
<h2>Digite idades</h2>

<form method="post">
    Idade: 
    <input type="number" name="idade" value="Enviar idade" min="1">
    <input type="submit" name="enviar" value="Enviar idade" min="1">
    <input type="submit" name="verificar" value="Verificar resultado">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if (!isset($_SESSION["menores"])) {
    $_SESSION["menores"] = 0;
}
if (!isset($_SESSION["idosos"])) {
    $_SESSION["idosos"] = 0;
}

if (isset($_POST["enviar"])) {
    $idade = $_POST["idade"];

    if ($idade >= 1) {
        if ($idade < 18) {
            $_SESSION["menores"]++;
        } else if ($idade > 65) {
            $_SESSION["idosos"]++;
        }
        echo "<p>Idade colocada!</p>";
    }
}


if (isset($_POST["verificar"])) {
    echo "<h3>Resultado Final</h3>";
    echo "<p>Pessoas com menos de 18 : " . $_SESSION["menores"] . "</p>";
    echo "<p>Pessoas com mais de 65 : " . $_SESSION["idosos"] . "</p>";

    session_destroy();
}
?>

</body>
</html>