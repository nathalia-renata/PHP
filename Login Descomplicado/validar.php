<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Login</title>
</head>
<body>

    <?php
    // Verifica se a requisição foi feita com o método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Define as credenciais pré-definidas
        $usuarioCorreto = "Nathalia";
        $senhaCorreta = "1234";

        // Obtém os valores dos campos do formulário
        $usuarioDigitado = $_POST['usuario'];
        $senhaDigitada = $_POST['senha'];

        // Verifica se os valores digitados correspondem aos pré-definidos
        if ($usuarioDigitado == $usuarioCorreto && $senhaDigitada == $senhaCorreta) {
            // Se as credenciais estiverem corretas
            echo "<h1>Login realizado com sucesso!</h1>";
            echo "<p>Bem-vindo, " . htmlspecialchars($usuarioDigitado) . "!</p>";
        } else {
            // Se as credenciais estiverem incorretas
            echo "<h1>Usuário ou senha incorretos!</h1>";
            echo "<a href='index.php'>Tentar novamente</a>";
        }

    } else {
        // Se a página for acessada diretamente, redireciona para o formulário
        header("Location: index.php");
        exit;
    }
    ?>

</body>
</html>