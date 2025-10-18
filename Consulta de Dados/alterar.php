<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = mysqli_real_escape_string($conexao, $_POST['id']);
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);

    $sql = "UPDATE usuario SET nome = '$nome', email = '$email' WHERE id = $id";

    if (mysqli_query($conexao, $sql)) {
        header("Location: index.php?msg=sucesso_alterar");
    } else {
        header("Location: index.php?msg=erro_alterar");
    }
}
exit;
?>