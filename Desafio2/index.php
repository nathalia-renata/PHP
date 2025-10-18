<?php
// Inicia a sessão no topo da página
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $idade = htmlspecialchars($_POST['idade']);
    $peso = htmlspecialchars($_POST['peso']);
    $altura = htmlspecialchars($_POST['altura']);

    // Salva os dados do usuário 1 na sessão
    $_SESSION['usuario1'] = [
        'nome' => $nome,
        'idade' => $idade,
        'peso' => $peso,
        'altura' => $altura
    ];

    // Exibe os dados para o usuário
    echo "<h1>Dados do Usuário 1:</h1>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Idade: $idade</p>";
    echo "<p>Peso: $peso</p>";
    echo "<p>Altura: $altura</p>";
    echo "<hr>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Usuário 1</title>
</head>
<body>
    <form action="" method="post">
        <h1>Preencha seus dados para dar continuidade ao cadastro</h1>
        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>
        <label for="peso">Peso:</label>
        <input type="text" id="peso" name="peso" required><br><br>
        <label for="altura">Altura:</label>
        <input type="text" id="altura" name="altura" required><br><br>
        <button type="submit">Enviar</button>
    </form>
    
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <br><br><a href="pagina2.php">Próxima Página</a>
    <?php endif; ?>
</body>
</html>