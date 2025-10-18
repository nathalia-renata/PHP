<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form action="" method="post">
        <h1> De quem é a famosa frase “Penso, logo existo”??</h1>

    <input type="checkbox" id= "descartes" name="resposta2" value="descartes">René Descartes<br><br>
    <input type="checkbox" id= "platao" name="resposta2" value="platao">Platão<br><br>

    <button type="submit" id ="submit" value="Enviar"> Enviar </button><br><br>
    
<?php
session_start();
     if (!isset($_SESSION['nome'])) {
    header("Location: index.php");
    exit();
}
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
         if (isset($_POST['resposta2']) && $_POST['resposta2'] === 'descartes') {
             $_SESSION['pontuacao'] += 1;
             }
        header("Location: quiz3.php");
        exit();
         
        }
    
      

    ?>

</form>
</body>
</html>