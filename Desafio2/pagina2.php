<?php
session_start();

// Verifica se os dados do usuário 1 existem na sessão
if (!isset($_SESSION['usuario1'])) {
    header("Location: index.php");
    exit();
}

// Pega os dados do usuário 1 da sessão
$usuario1 = $_SESSION['usuario1'];

// Processa o formulário do usuário 2
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome2 = htmlspecialchars($_POST['nome2']);
    $idade2 = htmlspecialchars($_POST['idade2']);
    $peso2 = htmlspecialchars($_POST['peso2']);
    $altura2 = htmlspecialchars($_POST['altura2']);

    // Você pode salvar os dados do usuário 2 na sessão também
    $_SESSION['usuario2'] = [
        'nome' => $nome2,
        'idade' => $idade2,
        'peso' => $peso2,
        'altura' => $altura2
    ];

    // Exibe os dados do usuário 2
    echo "<hr>";
    echo "<h1>Dados do Usuário 2:</h1>";
    echo "<p>Nome: $nome2</p>";
    echo "<p>Idade: $idade2</p>";
    echo "<p>Peso: $peso2</p>";
    echo "<p>Altura: $altura2</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Usuário 2</title>
</head>
<body>
    <h1>Dados do Usuário 1:</h1>
    <p>Nome: <?php echo $usuario1['nome']; ?></p>
    <p>Idade: <?php echo $usuario1['idade']; ?></p>
    <p>Peso: <?php echo $usuario1['peso']; ?></p>
    <p>Altura: <?php echo $usuario1['altura']; ?></p>
    <hr>
    
    <form action="" method="post">
        <h1>Usuário 2 - Preencha seus dados para dar continuidade ao cadastro</h1>
        <label for="nome2">Nome completo:</label>
        <input type="text" id="nome2" name="nome2" required><br><br>
        <label for="idade2">Idade:</label>
        <input type="number" id="idade2" name="idade2" required><br><br>
        <label for="peso2">Peso:</label>
        <input type="text" id="peso2" name="peso2" required><br><br>
        <label for="altura2">Altura:</label>
        <input type="text" id="altura2" name="altura2" required><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>