<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="att1.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Média Aritmética</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="n1">Nota 1:</label>
                <input name="n1" id="n1" type="number" min="0" max="100" required>
            </div>
            
            <div class="form-group">
                <label for="n2">Nota 2:</label>
                <input name="n2" id="n2" type="number" min="0" max="100" required>
            </div>

            <div class="form-group">
                <label for="n3">Nota 3:</label>
                <input name="n3" id="n3" type="number" min="0" max="100" required>
            </div>

            <div class="form-group">
                <label for="n4">Nota 4:</label>
                <input name="n4" id="n4" type="number" min="0" max="100" required>
            </div>

            <button type="submit">Calcular Média</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            
            
            if(isset($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'])) {
                $nota1 = (float)$_POST['n1'];
                $nota2 = (float)$_POST['n2'];
                $nota3 = (float)$_POST['n3'];
                $nota4 = (float)$_POST['n4'];

                $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
                
                echo '<div class="resultado">';
                echo "<h2>A média das notas é: " . number_format($media, 2) . "</h2>";
                echo '</div>';
            } else {
                echo '<div class="erro"><p>Preencha todas as notas!</p></div>';
            }
        }
        ?>
    </div>
</body>
</html>
