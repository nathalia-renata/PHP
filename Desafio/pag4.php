<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
    <h1> O resultado foi:</h1>

<?php
   session_start();

    if (isset($_SESSION['nome']) && isset($_SESSION['pontuacao'])) {
    $nome = $_SESSION['nome'];
    $pontuacao_final = $_SESSION['pontuacao'];

    // Destroi a sessão para que a pontuação não seja guardada
    session_destroy();
}   else {
    // Redireciona se o usuário tentar acessar a página diretamente(recarregar a pag)
    header("Location: index.php");
    exit();
}

    echo "<h2> $nome seu resultado é $pontuacao_final /3</h2>"
    
    ?>

</form>
</body>
</html>