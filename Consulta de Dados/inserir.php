<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);

    $sql = "INSERT INTO usuario (nome, email) VALUES ('$nome', '$email')";

    if (mysqli_query($conexao, $sql)) {
        header("Location: index.php?msg=sucesso_inserir");
    } else {
        header("Location: index.php?msg=erro_inserir");
    }
}
exit;
?>