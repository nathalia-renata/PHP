<!DOCTYPE html>
<html>
<body>

<?php

$idadeUsuario = 33;
$idadeMinima = 18;
$podeAcessar = ($idadeUsuario >= $idadeMinima);

echo"<h2>A idade do usuário é de $idadeUsuario  anos. É possível acessar o conteúdo? $podeAcessar</h2>";
echo '<h1>'.($idadeMinima <= $idadeUsuario ? " ":'Não, o usuário não poderá acessar!!!').' </h1>';
echo '<h1>'.($idadeMinima >= $idadeUsuario? " ":'Sim, o usuário poderá acessar!!!').' </h1>';



?> 

</body>
</html>