<?php
session_start();


$produtos = [
    1 => ['nome' => 'Teclado Gamer', 'preco' => 250.00],
    2 => ['nome' => 'Mousepad RGB', 'preco' => 80.00],
    3 => ['nome' => 'Monitor 144Hz', 'preco' => 1200.00],
    4 => ['nome' => 'Headset com Microfone', 'preco' => 350.00]
];


if (isset($_GET['adicionar'])) {
    $id_produto = $_GET['adicionar'];
    
    // Verifica se o produto existe no nosso array de produtos
    if (isset($produtos[$id_produto])) {

        if (!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = [];
        }
        
       
        $_SESSION['carrinho'][] = $id_produto;
        
        // Redireciona para evitar que o refresh adicione o item novamente
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossa Loja Online</title>
</head>
<body>

    <h2>Produtos Disponíveis</h2>

    <p>
        <a href="carrinho.php">Ver Carrinho</a> | 
        <a href="?limpar_carrinho=1">Limpar Carrinho</a>
    </p>

    <?php
    // exibir o número de itens no carrinho
    $num_itens = isset($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : 0;
    echo "<p>Itens no carrinho: " . $num_itens . "</p>";

   
    if (isset($_GET['limpar_carrinho'])) {
        session_destroy();
        header("Location: index.php");
        exit();
    }
    ?>

    <ul>
        <?php foreach ($produtos as $id => $produto): ?>
            <li>
                <?php echo $produto['nome']; ?> - R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?>
                <a href="?adicionar=<?php echo $id; ?>">Adicionar ao Carrinho</a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>