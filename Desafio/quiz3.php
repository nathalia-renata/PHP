<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form action="" method="post">
        <h1> Qual o grupo em que todas as palavras foram escritas corretamente?</h1>

    <input type="checkbox" id= "a" name="resposta3" value="a">A- Asterístico, beneficiente, metereologia, entretido<br><br>
    <input type="checkbox" id= "b" name="resposta3" value="b">B- Asterisco, beneficente, meteorologia, entretido<br><br>

    <button type="submit" id ="submit" value="Enviar"> Enviar </button><br><br>
    
<?php
session_start();

//busca os dados do index
     if (!isset($_SESSION['nome'])) {
    header("Location: index.php");
    exit();
     }
//verfica a pag
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (isset($_POST['resposta3']) && $_POST['resposta3'] === 'b') {
            $_SESSION['pontuacao'] += 1;    /* soma os pontos*/ 
       }
            header("Location: pag4.php"); /* manda para prox pag*/ 
        exit();
       
       }
    ?>

</form>
</body>
</html>