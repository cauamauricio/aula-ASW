<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="att1.css">
    <title>Document</title>
</head>
<body>
    <h1>Maioridade</h1>

    <form method="POST" action="">
        <label for="idade">Digite sua idade:</label>
        <input name="idade" id="idade" type="number" min="0" max="100" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
     if ($_SERVER['REQUEST_METHOD'] === 'POST') 
     error_reporting(E_ALL);
     ini_set('display_errors', 1);
     
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = $_POST["idade"];

        if ($idade >= 18) {
            echo "<h2>tá maior de idade, vai se alistar</h2>";
        } 
        else {
            $faltam = 18 - $idade;
            echo "<h2>sai daqui mucilom. Faltam $faltam ano(s).</h2>";
        }
    }
    ?>
</body>
</html>