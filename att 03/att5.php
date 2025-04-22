<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="att1.css">
    <title>Document</title>
</head>
<body>
    <h1>Radar Eletrônico</h1>

    <form method="POST" action="">
        <label for="velocidade">Digite a velocidade (km/h):</label>
        <input name="velocidade" id="velocidade"  type="number" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $velocidade = $_POST["velocidade"];

        if ($velocidade > 110) {
            echo "<h2>virou o sonic? abaixa essa velocidade aí.</h2>";
        } else {
            echo "<h2>Velocidade tá de boa.</h2>";
        } 
    }
    ?>
</body>
</html>