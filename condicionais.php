// Controle de fluxo: condicionais
$idade = (int) readline('Qual sua idade? ');
$maiorIdade = $idade >= 18;

// Estrutura condicional: 'if/else'
if ($maiorIdade) {
    echo 'Maioridade' . PHP_EOL;
} else {
    echo 'Menoridade' . PHP_EOL;
}

// Teste meu
$mediaAluno = 5;
$nota1 = (int) readline('Nota 1: ');
$nota2 = (int) readline('Nota 2: ');

if (($nota1 + $nota2) / 2 >= $mediaAluno) {
    echo 'Na média' . PHP_EOL;
} else {
    echo 'Reprovado' . PHP_EOL;
}

// Segundo teste
$mediaAluno1 = 7;
$nota01 = (int) readline('Nota 1: ');
$nota02 = (int) readline('Nota 2: ');

$media = ($nota01 + $nota02) / 2;

if ($media >= $mediaAluno1) {
    echo 'Na média, sua nota foi ' . $media . PHP_EOL;
} elseif ($media >= 5) {
    echo 'Recuperação, sua nota foi ' . $media . PHP_EOL;
} else {
    echo 'Reprovado, sua nota foi ' . $media . PHP_EOL;
}

// Switch case
$permissoes = 'aluno'; // 'aluno' || 'professor' || 'admin'

switch ($permissoes) {
    case 'aluno':
        echo 'Você só pode visualizar as aulas' . PHP_EOL;
        break;
    case 'professor':
        echo 'Você pode alterar as aulas e adicionar exercícios' . PHP_EOL;
        break;
    case 'admin':
        echo 'Você pode fazer o que quiser no sistema' . PHP_EOL;
        break;
    default:
        echo 'Não sei quem é você no sistema' . PHP_EOL;
        break;
}

// Operador ternário
$idadezinha = 7;
echo $idadezinha >= 18 ? 'Maioridade' : 'Minoridade' . PHP_EOL;

$mensagem = $idadezinha >= 18 ? 'Maioridade' : 'Minoridade'; 
echo $mensagem . PHP_EOL;

// Truthy & Falsy
$valor = ''; // Exemplo de falsy
if (empty($valor)) {
    echo 'Valor é falsy' . PHP_EOL;
} else {
    echo 'Valor é truthy' . PHP_EOL;
}
