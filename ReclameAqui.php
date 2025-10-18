<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reclame Aqui</title>
</head>
<body>
   <label> Descreva sua reclamação no campo a baixo:</label> <br><br>
    <input type="text" id= "reclamacao" name="reclamacao"><br><br>
    <button type="submit" value="Enviar"> Enviar </button><br><br>
    <button type="reset" value="Limpar">Limpar</button><br><br>


<?php

    $httpStatusCode = 250;

if ($httpStatusCode == 250) {
    echo "Ebaa! Seu cód funcionou!!";
} else if ($httpStatusCode == 404) {
    echo "Eita! Página indisponível. Bora tentar novamente?";
} else if ($httpStatusCode == 500) {
    echo "Socorro! Aconteceu um bug misterioso e o servidor está em pânico. Volte mais tarde!";
} else {
    echo "Algo aconteceu, mas não sabemos o quê. Fique ligado nos próximos capítulos!";
}

?>
</body>
</html>