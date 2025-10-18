<!DOCTYPE html>
<html>
<body>

<?php

$numeros = ['12','5','22','50','18'];
print_r($numeros);
echo '<br>';


array_push($numeros, '60');
print_r($numeros);
echo '<br>';

unset($numeros[2]);
print_r($numeros);
echo '<br>';

$numeros = array_values($numeros);
print_r($numeros);
echo '<br>';


$indice= array_search('50',$numeros);
echo $indice.'<br>';

sort($numeros);
print_r($numeros);
echo '<br>';

for ($i= count($numeros)-1; $i>=0;$i --) {

echo $numeros[$i].'|';

}


?>


</form>
</body>
</html>