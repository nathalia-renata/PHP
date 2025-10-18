<?php
session_start();


if (isset($_GET['remover'])) {
    $id_remover = $_GET['remover'];
    
    if (isset($_SESSION['carrinho'])) {
       
        $key = array_search($id_remover, $_SESSION['carrinho']);
        
        // Se a chave for encontrada, remove o item
        if ($key !== false) {
            unset($_SESSION['carrinho'][$key]);
            

            $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
        }
    }
    
  
    header("Location: carrinho.php");
    exit();
}


$produtos = [
    1 => ['nome' => 'Teclado Gamer', 'preco' => 250.00],
    2 => ['nome' => 'Mousepad RGB', 'preco' => 80.00],
    3 => ['nome' => 'Monitor 144Hz', 'preco' => 1200.00],
    4 => ['nome' => 'Headset com Microfone', 'preco' => 350.00]
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Carrinho</title>
</head>
<body>

    <h2>Meu Carrinho</h2>

    <p><a href="index.php">Continuar Comprando</a></p>

    <?php
    $total = 0;
    
    if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])):
    ?>
    
    <ul>
        <?php foreach ($_SESSION['carrinho'] as $key => $id_produto): ?>
            <?php
            // Verifica se o ID do produto existe no array
            if (isset($produtos[$id_produto])):
                $produto = $produtos[$id_produto];
                $total += $produto['preco'];
            ?>
            <li>
                <?php echo $produto['nome']; ?> - R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?>
                <a href="?remover=<?php echo $id_produto; ?>">Remover</a>
            </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <h3>Total da Compra: R$ <?php echo number_format($total, 2, ',', '.'); ?></h3>

    <?php else: ?>
        <p>Seu carrinho está vazio.</p>
    <?php endif; ?>

</body>
</html>