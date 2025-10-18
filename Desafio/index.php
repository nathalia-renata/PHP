<!DOCTYPE html>
<html lang="pt/br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hora do Desafio</title>
</head>
<body>

    <h1>Preparado para o desafio? </h1>
    <form action="" method="post">
    <label for="nome"> Nome : </label> 
    <input type="text" id= "nome" name="nome"><br><br>

    <button type="submit" value="Enviar"> Enviar </button><br><br>
    <button type="reset" value="Limpar">Limpar</button>
<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    
    // Armazena o nome
    $_SESSION['nome'] = $nome;
    $_SESSION['pontuacao'] = 0;
    
    // manda para o quiz seguinte
    header("Location: quiz1.php");
    exit(); 
}
?>
