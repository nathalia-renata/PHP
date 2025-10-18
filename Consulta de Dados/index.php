<?php
include 'conexao.php';

if (isset($_GET['deletar'])) {
    $id = mysqli_real_escape_string($conexao, $_GET['deletar']);
    $sql = "DELETE FROM usuario WHERE id = $id"; // Tabela alterada para 'usuario'
    if (mysqli_query($conexao, $sql)) {
        header("Location: index.php?msg=sucesso_deletar");
    } else {
        header("Location: index.php?msg=erro_deletar");
    }
    exit;
}

$sql = "SELECT id, nome, email FROM usuario"; // Tabela alterada para 'usuario'
$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Usuários</title>
</head>
<body>
    <h1>Gerenciar Usuários</h1>
    <?php if (isset($_GET['msg'])): ?>
        <?php if ($_GET['msg'] == 'sucesso_inserir'): ?>
            <p style="color: green;">Usuário inserido com sucesso!</p>
        <?php elseif ($_GET['msg'] == 'erro_inserir'): ?>
            <p style="color: red;">Erro ao inserir usuário.</p>
        <?php elseif ($_GET['msg'] == 'sucesso_alterar'): ?>
            <p style="color: green;">Usuário alterado com sucesso!</p>
        <?php elseif ($_GET['msg'] == 'erro_alterar'): ?>
            <p style="color: red;">Erro ao alterar usuário.</p>
        <?php elseif ($_GET['msg'] == 'sucesso_deletar'): ?>
            <p style="color: green;">Usuário excluído com sucesso!</p>
        <?php elseif ($_GET['msg'] == 'erro_deletar'): ?>
            <p style="color: red;">Erro ao excluir usuário.</p>
        <?php endif; ?>
    <?php endif; ?>

    <h2>Inserir Novo Usuário</h2>
    <form action="inserir.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <button type="submit">Adicionar Usuário</button>
    </form>

    <hr>

    <h2>Usuários Cadastrados</h2>
    <table border="1" style="width:100%; text-align:left;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($resultado) > 0) {
                while($linha = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($linha['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($linha['nome']) . "</td>";
                    echo "<td>" . htmlspecialchars($linha['email']) . "</td>";
                    echo "<td>";
                    echo "<a href='alterar_form.php?id=" . htmlspecialchars($linha['id']) . "'>Alterar</a> | ";
                    echo "<a href='index.php?deletar=" . htmlspecialchars($linha['id']) . "' onclick=\"return confirm('Tem certeza que deseja excluir?');\">Excluir</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Nenhum usuário encontrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
<?php
mysqli_close($conexao);
?>