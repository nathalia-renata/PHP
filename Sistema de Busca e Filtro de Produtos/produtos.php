<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca de Produtos</title>
</head>
<body>

    <h2>Buscar Produtos</h2>

    <form action="produtos.php" method="GET">
        <label for="termo">Digite sua busca:</label>
        <input type="text" id="termo" name="termo">
        <input type="submit" value="Buscar">
    </form>

    <hr>

    <h3>Resultados</h3>

    <?php
    // Array de produtos com alguns itens de exemplo
    $produtos = [
        "Teclado Mecânico HyperX",
        "Mouse Gamer Logitech",
        "Monitor Ultrawide Samsung",
        "Headset Gamer Redragon",
        "Mousepad Grande",
        "Teclado ABNT2"
    ];

    // Verifica se a superglobal $_GET['termo'] existe
    // e se o valor não está vazio
    if (isset($_GET['termo']) && !empty($_GET['termo'])) {
        // Se a busca for realizada, armazena o termo
        $termo_busca = $_GET['termo'];
        echo "<p>Mostrando resultados para: <strong>" . htmlspecialchars($termo_busca) . "</strong></p>";

        $encontrou_produto = false;

        // Percorre o array de produtos
        foreach ($produtos as $produto) {
            // Usa stripos() para encontrar a posição da primeira ocorrência do termo de busca
            // A função é case-insensitive, ou seja, não diferencia maiúsculas de minúsculas
            if (stripos($produto, $termo_busca) !== false) {
                echo "<p>- " . htmlspecialchars($produto) . "</p>";
                $encontrou_produto = true;
            }
        }

        if (!$encontrou_produto) {
            echo "<p>Nenhum produto encontrado.</p>";
        }

    } else {
        // Se a busca não foi realizada, exibe todos os produtos
        echo "<p>Exibindo todos os produtos:</p>";
        foreach ($produtos as $produto) {
            echo "<p>- " . htmlspecialchars($produto) . "</p>";
        }
    }
    ?>

    <hr>

    <h3>Busca por Link</h3>
    
    <ul>
        <li><a href="produtos.php?termo=mouse">Buscar por "mouse"</a></li>
        <li><a href="produtos.php?termo=teclado">Buscar por "teclado"</a></li>
    </ul>

</body>
</html>