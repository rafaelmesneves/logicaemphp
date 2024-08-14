// Operador booleano (verdadeiro ou falso) são baseados em comparação

$numero1 = 10;
$numero2 = 12;

echo ($numero1 == $numero2) ? 'true' : 'false'; // '==' significa igualdade
echo PHP_EOL;

echo ($numero1 === $numero2) ? 'true' : 'false'; // '===' significa igualdade em valor e em tipo de dado (string ou number)
echo PHP_EOL;

echo ($numero1 != $numero2) ? 'true' : 'false'; // '!=' significa diferente, com '!==' é mais usado e certeiro
echo PHP_EOL;

echo ($numero1 > $numero2) ? 'true' : 'false'; // maior que
echo PHP_EOL;

echo ($numero1 < $numero2) ? 'true' : 'false'; // menor que
echo PHP_EOL;

echo ($numero1 >= $numero2) ? 'true' : 'false'; // maior ou igual
echo PHP_EOL;

echo ($numero1 <= $numero2) ? 'true' : 'false'; // menor ou igual
echo PHP_EOL;

// Conjunções lógicas
$idadePessoa1 = 20;
$idadePessoa2 = 39;

echo ($idadePessoa1 >= 18 && $idadePessoa2 >= 18) ? 'true' : 'false'; // '&&' significa "e e ao mesmo tempo é"
echo PHP_EOL;

echo ($idadePessoa1 >= 18 || $idadePessoa2 >= 18) ? 'true' : 'false'; // '||' significa "ou um ou outro"
echo PHP_EOL;

// Operador de inversão
echo !true ? 'true' : 'false'; // uso de '!' à frente do booleano inverte o seu valor
echo PHP_EOL;
