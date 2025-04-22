<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="att1.css">
    <title>Document</title>
</head>

<body>

<h2>Verificador de Temperatura</h2>

<form method="post">
    Digite a temperatura corporal tua aí (°C): 
    <input type="number" name="temp" step="0.1">
    <input type="submit" value="Verificar">
</form>

<?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') 
 error_reporting(E_ALL);
 ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temp = $_POST["temp"];

    if ($temp < 35) {
        echo "<p>tá com Hipotermia irmão, corre pro hospital.</p>";
    } elseif ($temp >= 35 && $temp <= 36.7) {
        echo "<p>Temperatura tá de boa.</p>";
    } elseif ($temp > 36.7 && $temp < 38) {
        echo "<p>tá quase com febre, fica esperto.</p>";
    } elseif ($temp >= 38 && $temp < 40) {
        echo "<p>tá com febre paizão se cuida aí.</p>";
    } elseif ($temp >= 40 && $temp <= 45) {
        echo "<p>Febre tá muito alta moleque, busca um hospital.</p>";
    } else {
            echo "<p>Escolha um Deus e começe a rezar.</p>";
        }
}
?>

</body>
</html>