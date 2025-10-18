<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Descomplicado</title>
</head>
<body>

    <h2>Login</h2>

    <form action="validar.php" method="POST">
        <p>
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required>
        </p>
        <p>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
        </p>
        <p>
            <input type="submit" value="Entrar">
        </p>
    </form>

</body>
</html>