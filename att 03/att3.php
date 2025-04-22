<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="att1.css">
    <title>Document</title>
</head>
<body>
    <h1>Descubra se o número é Par ou Ímpar</h1>

    <form method="POST" action="">
        <label for="n">Digite um número inteiro:</label>
        <input name="n" id="n" type="number" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
     if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["n"];

        if ($numero % 2 == 0) {
            echo "<h2>$numero é um número PAR</h2>";
        } else {
            echo "<h2>$numero é um número ÍMPAR</h2>";
        }
    }
    ?>
</body>
</html>