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
    Digite 5 nomes:
    <input type="text" name="n1" required>
    <input type="text" name="n2" required>
    <input type="text" name="n3" required>
    <input type="text" name="n4" required>
    <input type="text" name="n5" required>
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = [
        $_POST["n1"],
        $_POST["n2"],
        $_POST["n3"],
        $_POST["n4"],
        $_POST["n5"]
    ];

    echo "<h2>os nomes são:</h2>";
    foreach ($name as $name) {
        echo "<p>$name</p>";
    }
}
?>

</body>
</html>