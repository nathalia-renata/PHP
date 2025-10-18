<!DOCTYPE html>
<html>
<body>

<?php

$aluno= 'Angelica';
$nota1 = 90;
$nota2 = 95;
$nota3 = 60;

$soma = $nota1+$nota2+$nota3;
$media = $soma/3;

if ($media >= 60 && $media <=79){
    echo "<h1> O(a) aluno(a) $aluno está dentro da media, com o valor de $media % media</h1>";
}
elseif ($media >= 80){
    echo "<h1> O(a) aluno(a) $aluno superou as expectativas, com o valor de $media % media</h1>";
}

elseif ($media <= 59) {
    echo "<h1> O(a) aluno(a) $aluno não atingil as expectativas, com o valor de $media % media</h1>";
}
 else {
    echo "Erro!Tente novamente!!";
 }

?>
</body>
</html>