<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="att1.css">
    <title>Document</title>
</head>
<body>

<h2>Contador: 1 até 100</h2>

<form method="post">
    <input name="contar" value="Iniciar Contagem" type="submit">
</form>

<?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') 
 error_reporting(E_ALL);
 ini_set('display_errors', 1);

if (isset($_POST["contar"])) {
    echo "<p><strong>Contando de 1 a 100:</strong></p>";
    for ($i = 1; $i <= 100; $i++) {
        echo $i . "<br>";
    }
}
?>

</body>
</html>