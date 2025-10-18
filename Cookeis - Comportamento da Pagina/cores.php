<?php
// Verifica se o parâmetro 'cor' foi passado via GET
if (isset($_GET['cor']) && !empty($_GET['cor'])) {
    
    // Captura o valor da cor da URL
    $cor_escolhida = htmlspecialchars($_GET['cor']);

    // Define o tempo de expiração do cookie (30 dias)
    $expiracao = time() + (86400 * 30); // 86400 segundos = 1 dia

    // Salva a cor no cookie
    setcookie('cor_preferida', $cor_escolhida, $expiracao);
}

// Redireciona de volta para a página inicial
header('Location: index.php');
exit();
?>