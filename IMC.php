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
    <input type="text" id= "peso" name="peso">Peso em Kg: <br><br>
    <input type="text" id= "altura" name="altura">Altura Metro(1.64): <br><br>

    <button type="submit" id ="submit" value="Enviar"> Enviar </button><br><br>
    
<?php

        
        $nome = $_POST['nome'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $imc = $peso / pow($altura, 2);

if ($imc <= 18.5) {
    echo "<h1> $nome seu IMC é $imc e sua classificação é:  Abaixo do peso </h1>";
}      
elseif ($imc >= 18.5 && $imc <= 24.9 ){
    echo "<h1>$nome seu IMC é $imc e sua classificação é: Peso normal </h1>";

}
elseif ($imc >= 25.0 && $imc <= 29.9 ){
    echo "<h1>$nome seu IMC é $imc e sua classificação é: Sobrepeso </h1>";
}
elseif ($imc >= 30.0 && $imc <= 34.9 ){
    echo "<h1>$nome seu IMC é $imc e sua classificação é: Obesidade grau I </h1>";
}
elseif ($imc >= 35.0 && $imc <= 39.9 ){
    echo "<h1>$nome seu IMC é $imc e sua classificação é: Obesidade grau II </h1>";
}
elseif ($imc >= 40.0 ){
    echo "<h1>$nome seu IMC é $imc e sua classificação é: Obesidade grau III </h1>";
}
else {
    echo "<h1> Erro! Tente novamente!! </h1>";
}
       

    ?>

</form>
</body>
</html>