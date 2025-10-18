<?php


$alunos = [
    ['nome' => 'Ana', 'nota' => 8.5],
    ['nome' => 'Luiza', 'nota' => 8.0],
    ['nome' => 'Regina', 'nota' => 3.0],
    ['nome' => 'Lucas', 'nota' => 9.0],
    ['nome' => 'Felipe', 'nota' => 5.5]
];


function inserirAluno(array &$alunos, string $nome, float $nota): void
{
    foreach ($alunos as $aluno) {
        if ($aluno['nome'] === $nome) {
            echo "Erro: O aluno '$nome' já possui uma nota lançada.\n";
            return;
        }
    }
    $alunos[] = ['nome' => $nome, 'nota' => $nota];
    echo "Aluno '$nome' com nota $nota inserido com sucesso!\n";
}


function removerAluno(array &$alunos, string $nome): void
{
    $encontrado = false;
    foreach ($alunos as $chave => $aluno) {
        if ($aluno['nome'] === $nome) {
            unset($alunos[$chave]);
            $encontrado = true;
            echo "Aluno '$nome' removido com sucesso!\n";
          
            $alunos = array_values($alunos);
            return;
        }
    }
    if (!$encontrado) {
        echo "Erro: O aluno '$nome' não foi encontrado na lista.\n";
    }
}


function alterarNota(array &$alunos, string $nome, float $novaNota): void
{
    $encontrado = false;
    foreach ($alunos as &$aluno) {
        if ($aluno['nome'] === $nome) {
            $aluno['nota'] = $novaNota;
            $encontrado = true;
            echo "Nota do aluno '$nome' alterada para $novaNota com sucesso!\n";
            return;
        }
    }
    if (!$encontrado) {
        echo "Erro: O aluno '$nome' não foi encontrado na lista.\n";
    }
}


function consultarAluno(array $alunos, string $nome, float $notaMinima = 6.0): void
{
    $encontrado = false;
    foreach ($alunos as $aluno) {
        if ($aluno['nome'] === $nome) {
            $encontrado = true;
            $status = ($aluno['nota'] >= $notaMinima) ? 'Aprovado(a)' : 'Reprovado(a)';
            echo "A nota de '$nome' é {$aluno['nota']}. Status: $status\n";
            return;
        }
    }
    if (!$encontrado) {
        echo "Erro: O aluno '$nome' não foi encontrado na lista.\n";
    }
}


function listarAlunos(array $alunos, float $notaMinima = 6.0): void
{
    echo "--- Lista de Notas dos Alunos ---\n";
    foreach ($alunos as $aluno) {
        $status = ($aluno['nota'] >= $notaMinima) ? 'Aprovado(a)' : 'Reprovado(a)';
        echo "Nome: {$aluno['nome']} | Nota: {$aluno['nota']} | Status: $status\n";
    }
    echo "---------------------------------\n";
}


function analisarAlunos(array $alunos, float $notaMinima = 6.0): array
{
    $aprovados = 0;
    $reprovados = 0;

    foreach ($alunos as $aluno) {
        if ($aluno['nota'] >= $notaMinima) {
            $aprovados++;
        } else {
            $reprovados++;
        }
    }

    return [
        'aprovados' => $aprovados,
        'reprovados' => $reprovados
    ];
}


echo "--- Iniciando o sistema de controle de alunos ---\n\n";


inserirAluno($alunos, 'Sofia', 8.5);
inserirAluno($alunos, 'Luna', 7.0); 

echo "\n";


alterarNota($alunos, 'Felipe', 6.5);
alterarNota($alunos, 'Ana', 7.0); 

echo "\n";


removerAluno($alunos, 'Regina');
removerAluno($alunos, 'Luiza');

echo "\n";


consultarAluno($alunos, 'Regina');
consultarAluno($alunos, 'Ana'); 

echo "\n";


listarAlunos($alunos);

echo "\n";


$resultados = analisarAlunos($alunos);
echo "Total de alunos aprovados: {$resultados['aprovados']}\n";
echo "Total de alunos reprovados: {$resultados['reprovados']}\n";

echo "\n--- Fim da execução ---\n";
?>