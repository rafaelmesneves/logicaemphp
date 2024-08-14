// Imprime algo
echo 'Hello World!' . PHP_EOL;

// Variáveis
$nome = 'Rafael'; // Em PHP, var não é utilizado. Usa-se $ para declarar variáveis.
$idade = 29; // número
$nomeDoProfessor = 'Walisson'; // Utilizar sempre o camel case
$altura = 1.77; // número
$estudando = true; // booleano verdadeiro
$naoEstudando = false; // booleano falso

echo 'Me chamo ' . $nome . ' e tenho ' . $idade . ' anos' . PHP_EOL;
echo gettype($nome) . PHP_EOL; // 'gettype' mostra qual é o tipo de variável sendo impresso
echo $idade . ', ' . gettype($idade) . PHP_EOL; // É possível demonstrar mais de uma saída usando ','

$semConteudo = null; // Variável sem atribuição de conteúdo, equivalente ao undefined em JavaScript

// É possível declarar mais de uma variável por vez usando a ','
$curso = "front-end em React";
$topico = "javascript basico I";
echo $curso . ', ' . $topico . PHP_EOL;

// Em PHP, não existe a distinção entre 'var', 'let' e 'const' como em JavaScript
$notaDoAluno = 10; // Permite que o valor declarado possa ser modificado
define('MEDIA_DO_ALUNO', 8); // Constante, não permite que o valor declarado mude

$notaDoAluno = 9;
// define('MEDIA_DO_ALUNO', 5); (não é permitido redefinir uma constante)

echo $notaDoAluno . PHP_EOL;
echo MEDIA_DO_ALUNO . PHP_EOL;

// Entrada de dados do usuário
$idade = (int) readline('Qual a sua idade? ');
echo "O usuário tem $idade anos de idade" . PHP_EOL;
