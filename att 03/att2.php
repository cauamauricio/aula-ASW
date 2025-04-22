<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="att1.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Conversão de Temperatura</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="c">Temperatura em Celsius (°C):</label>
                <input name="c" id="c" type="number" step="0.1" required
                       placeholder="Ex: 25.5">
            </div>

            <button type="submit">Converter para Fahrenheit</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            if(isset($_POST['c'])) {
                $celsius = (float)$_POST['c'];
                $fahrenheit = ($celsius * 1.8) + 32;
                
                echo '<div class="resultado">';
                echo "<h2>{$celsius}°C pra fahrenheit é " . number_format($fahrenheit, 2) . "°F</h2>";
                echo '</div>';
            } else {
                echo '<div class="erro"><p>Por favor, insira um valor válido</p></div>';
            }
        }
        ?>
    </div>
</body>
</html>