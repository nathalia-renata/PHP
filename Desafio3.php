<?php

// Definição da classe Aluno
class Aluno {
    
    // Atributos (propriedades) da classe
    public $nome;
    public $idade;
    public $matricula;
    
    // Construtor para inicializar os atributos
    public function __construct($nome, $idade, $matricula) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->matricula = $matricula;
    }
    
}

// Criação de objetos (instâncias) da classe Aluno
$aluno1 = new Aluno("João Silva", 20, "2023001");
$aluno2 = new Aluno("Maria Oliveira", 22, "2023002");
$aluno3 = new Aluno("Pedro Santos", 19, "2023003");

// Exibindo as informações dos alunos
echo "Aluno 1: <br>";
echo "Nome: " . $aluno1->nome . "<br>";
echo "Idade: " . $aluno1->idade . "<br>";
echo "Matrícula: " . $aluno1->matricula . "<br>";
echo "<hr>";

echo "Aluno 2: <br>";
echo "Nome: " . $aluno2->nome . "<br>";
echo "Idade: " . $aluno2->idade . "<br>";
echo "Matrícula: " . $aluno2->matricula . "<br>";
echo "<hr>";

echo "Aluno 3: <br>";
echo "Nome: " . $aluno3->nome . "<br>";
echo "Idade: " . $aluno3->idade . "<br>";
echo "Matrícula: " . $aluno3->matricula . "<br>";
echo "<hr>";

?>