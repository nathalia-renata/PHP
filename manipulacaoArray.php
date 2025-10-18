<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média da Prova</title>
</head>
<body>
<form action="" method="post">
        <h1> Preencha seus dados para conferirmos seu IMC:</h1>

    <input type="text" id= "nome" name="nome">Nome completo: <br><br>
    <input type="text" id= "idade" name="idade">Idade: <br><br>
    <input type="text" id= "curso" name="curso">Curso: <br><br>
    <input type="text" id= "prova1" name="prova1">Nota Prova 1: <br><br>
    <input type="text" id= "prova2" name="prova2">Nota Prova 2: <br><br>
    <input type="text" id= "prova3" name="prova3">Nota Prova 3: <br><br>
    <button type="submit" id ="submit" value="Enviar"> Enviar </button><br><br>
    

<?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $curso = $_POST['curso'];
    $aluno =  array($nome, $idade, $curso);
    $prova1 = $_POST['prova1'];
    $prova2 = $_POST['prova2'];
    $prova3 = $_POST['prova3'];
    $notas = ($prova1+$prova2+$prova3)/3;
    
    echo "<h1>$aluno[0] $aluno[1] anos $aluno[2]</h1>";
    echo "<h1> O(a) aluno(a) $nome, do curso de $curso, obteve média $notas  </h1> ";
   
    
?>
</body>
</html>