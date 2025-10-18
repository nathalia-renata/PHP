<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reclame Aqui</title>
</head>
<body>
<?php
$tarefaCompleta = true;
$tarefaAtribuida = false;
$tarefaPodeSerFinalizada = ( $tarefaCompleta && $tarefaAtribuida);

if ($tarefaPodeSerFinalizada == true){
    echo "<h1> A tarefa pode ser finalizada? Sim, pois é $tarefaPodeSerFinalizada verdadeiro</h1>";
}

elseif($tarefaPodeSerFinalizada == false ){
    echo "<h1> A tarefa pode ser finalizada? Não, pois é $tarefaPodeSerFinalizada falso</h1>";
}

else {
echo "<h1> Erro! Tente novamente!!</h1>";

}    
?>
</body>
</html>