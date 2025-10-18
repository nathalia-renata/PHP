<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <form action="" method="post">
        <h1> Preencha seus dados para conferirmos seu IMC:</h1>

    <input type="text" id= "nome" name="nome">Nome completo: <br><br>
    <input type="text" id= "idade" name="idade">Idade: <br><br>


    <button type="submit" id ="submit" value="Enviar"> Enviar </button><br><br>
    
<?php

        
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
    

if ( $idade <= 12) {
    echo "<h1> Olá, $nome! Sua classificação é: Criança.</h1>";
}      
elseif ( $idade <= 18 ){
    echo "<h1> Olá, $nome! Sua classificação é: Adolecente.</h1>";
}
elseif ($idade <= 60 ){
   echo "<h1> Olá, $nome! Sua classificação é: Adulto.</h1>";
}
else  {
   echo "<h1> Olá, $nome! Sua classificação é: Idoso.</h1>";
}
       

    ?>

</form>
</body>
</html>