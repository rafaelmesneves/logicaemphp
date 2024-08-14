// Coerção explícita (forma manual de conversão)
$idade = (int) readline('Qual a sua idade? ');
echo $idade . ', ' . gettype($idade) . PHP_EOL;

$idadeInvalida = (int) 'x'; // Converte uma string inválida para número
echo is_nan($idadeInvalida) ? 'NaN' : $idadeInvalida . PHP_EOL;

$numeroComoString = strval(10); // Converte número para string
echo $numeroComoString . ', ' . gettype($numeroComoString) . PHP_EOL;

$booleanoDeZero = (bool) 0; // 0 é considerado 'false' em PHP
echo $booleanoDeZero ? 'true' : 'false' . PHP_EOL;

$booleanoDeUm = (bool) 1; // Qualquer número diferente de zero é 'true' em PHP
echo $booleanoDeUm ? 'true' : 'false' . PHP_EOL;

// Coerção implícita
$resultado1 = 1 . '1'; // Em PHP, o operador '.' é usado para concatenar strings
echo $resultado1 . PHP_EOL;

$resultado2 = 10 - (int) '5'; // A string é convertida para um número explicitamente
echo $resultado2 . PHP_EOL;

// Exemplo
$n = intval('1') + 1; // A coerção explícita é feita com intval()
$n = $n - 1; // Subtrai 1, resultando em 10
echo $n . PHP_EOL;

$resultado3 = (2 + 3 + 4) . '5'; // 9 + "5" = "95"
echo $resultado3 . PHP_EOL;

$resultado4 = '5' . 2 . 3 . 4; // "5234"
echo $resultado4 . PHP_EOL;

$resultado5 = (10 - 4 - 3 - 2) . '5'; // "15"
echo $resultado5 . PHP_EOL;
