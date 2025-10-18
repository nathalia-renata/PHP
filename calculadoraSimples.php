<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<h1>Calculadora</h1>
<form action="" method="post"> 
    <label for="valor1">Valor 1:</label>
    <input type="number" id="valor1" name="valor1" required><br><br>
    
    <label for="valor2">Valor 2:</label>
    <input type="number" id="valor2" name="valor2" required><br><br>
    
    <button type="submit" name="operacao" value="+">+</button>
    <button type="submit" name="operacao" value="-">-</button>
    <button type="submit" name="operacao" value="*">*</button>
    <button type="submit" name="operacao" value="/">/</button>
</form>

<?php
function soma($valor1, $valor2) {
    return $valor1 + $valor2;
}
function divisao($valor1, $valor2) {
    return $valor1 / $valor2;
}
function multiplicacao($valor1, $valor2) {
    return $valor1 * $valor2;
}
function subtracao($valor1, $valor2) {
    return $valor1 - $valor2;
}


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    if (isset($_POST['valor1']) && isset($_POST['valor2']) && isset($_POST['operacao'])) {
       
    $valor1 = (float)$_POST['valor1'];
    $valor2 = (float)$_POST['valor2'];
    $operacao = $_POST['operacao'];
    $resultado = 0;

       
    switch ($operacao) {
        case '+':
        $resultado = soma($valor1, $valor2);
        break;
        case '-':
        $resultado = subtracao($valor1, $valor2);
        break;
        case '*':
        $resultado = multiplicacao($valor1, $valor2);
        break;
        case '/':
        if ($valor2 != 0) {
        $resultado = divisao($valor1, $valor2);
        } 
        else {
        echo "<h3>Erro: Divisão por zero não é permitida.</h3>";
        exit;
        }
        break;
        default:
        echo "<h3>Erro: Operação inválida.</h3>";
        exit;
        }

        echo "<h3>Resultado: $valor1 $operacao $valor2 = $resultado</h3>";
    }
}
?>
</body>
</html>