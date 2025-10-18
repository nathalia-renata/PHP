<?php
$servidor = "localhost";
$usuario = "root"; // Altere se for diferente
$senha = ""; // Altere se for diferente
$banco = "consulta"; // Nome do seu banco de dados

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("A conexão com o banco de dados falhou: " . mysqli_connect_error());
}
?>