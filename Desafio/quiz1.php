<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="quiz2.php">
</head>
<body>
    <form action="" method="post">
        <h1> Qual a cor da maça madura?</h1>

    <input type="checkbox" id= "azul" name="resposta" value="azul">Azul<br><br>
    <input type="checkbox" id= "vermelho" name="resposta" value="vermelho">Vermelho<br><br>

    <button type="submit" id ="submit" value="Enviar"> Enviar </button><br><br>
    
<?php
session_start();
    if (!isset($_SESSION['nome'])) {
    header("Location: index.php");
    exit();
}
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (isset($_POST['resposta']) && $_POST['resposta'] === 'vermelho') {
        $_SESSION['pontuacao'] += 1;
       }
        header("Location: quiz2.php");
        exit();
    
       }
       
    ?>

</form>
</body>
</html>