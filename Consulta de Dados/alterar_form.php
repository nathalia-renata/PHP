<?php
include 'conexao.php';

$id = mysqli_real_escape_string($conexao, $_GET['id']);
$sql = "SELECT id, nome, email FROM usuario WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
$usuario = mysqli_fetch_assoc($resultado);

if (!$usuario) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Usuário</title>
</head>
<body>
    <h1>Alterar Usuário</h1>
    <form action="alterar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($usuario['id']); ?>">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($usuario['nome']); ?>" required><br><br>
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($usuario['email']); ?>" required><br><br>
        <button type="submit">Salvar Alterações</button>
    </form>
    <br>
    <a href="index.php">Cancelar</a>
</body>
</html>
<?php
mysqli_close($conexao);
?>