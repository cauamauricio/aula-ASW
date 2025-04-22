<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="att7.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2><strong> burgão do podrão </strong></h2>

        <form method="post">
            <div class="form-group">
                <label>Digite seu nome:</label>
                <input type="text" name="nome" required>
            </div>

            <div class="form-group">
                <label>Escolha seu lanche aí paizão:</label>
                <select name="lanche" required>
                    <option value="1">1 - burgão-podrão-prime (R$ 12,00)</option>
                    <option value="2">2 - burgão-normalzin (R$ 14,00)</option>
                    <option value="3">3 - burgão-doce (R$ 15,00)</option>
                    <option value="4">4 - burgão-mega (R$ 20,00)</option>
                    <option value="5">5 - x-tudo (R$ 28,00)</option>
                    <option value="6">6 - Especial-do-chefe (R$ 69,00)</option>
                </select>
            </div>

            <div class="form-group">
                <label>Quantidade:</label>
                <input type="number" name="quantidade" min="1" value="1" required>
            </div>

            <input type="submit" value="Pedir">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST["nome"]);
            $lanche = $_POST["lanche"];
            $quantidade = (int)$_POST["quantidade"];

            echo "<div class='pedido-info'>";
            echo "<h3>eai $nome!</h3>";

            $cardapio = [
                "1" => ["nome" => "burgão-podrão-prime", "preco" => 12.00],
                "2" => ["nome" => "burgão-normalzin", "preco" => 14.00],
                "3" => ["nome" => "burgão-doce", "preco" => 15.00],
                "4" => ["nome" => "burgão-mega", "preco" => 20.00],
                "5" => ["nome" => "x-tudo", "preco" => 28.00],
                "6" => ["nome" => "Especial-do-chefe", "preco" => 69.00],
            ];

            if (array_key_exists($lanche, $cardapio)) {
                $escolha = $cardapio[$lanche];
                $total = $escolha['preco'] * $quantidade;
                
                echo "<p>Você escolheu: <strong>{$escolha['nome']}</strong></p>";
                echo "<p>você pediu: $quantidade</p>";
                echo "<p>o preço é: R$ " . number_format($escolha['preco'], 2, ',', '.') . "</p>";
                echo "<p class='total'>o total é: R$ " . number_format($total, 2, ',', '.') . "</p>";
            } else {
                echo "<p class='erro'>Opção inválida</p>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>