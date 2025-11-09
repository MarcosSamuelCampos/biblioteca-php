<?php
require_once('vendor/autoload.php');

//importaão das classes
use Marcos\Biblioteca\Estante;
use Marcos\Biblioteca\Livro;
use Marcos\Biblioteca\Aluno;
use Marcos\Biblioteca\Professor;

echo 'sistama de biblioteca inciciado <br>';

//testando a classr livro;
$livro1 = new Livro("samuel", "teste1");
$livro2 = new Livro("samuel2", "teste12");
$livro1->marcarDisponivel();
$livro2->marcarDisponivel();
echo '<pre>';

$estante = new Estante();

//add livros na classe estante;
$estante->adicionarLivro($livro1);
$estante->adicionarLivro($livro2);

echo '<hr>';
echo 'ALUNO TESTE <br>';
echo '<pre>';
//testa a classe aluno
 $aluno = new Aluno("samuel");
 $aluno->adicionarLivroEmprestado($livro1);
if($aluno->podePegarEmprestado()){
    echo 'O aluno pode pegar mais livros emprestados <br>';
}else
{
    echo 'O aluno não pode pegar livros emprestados <br>';
}
var_dump($aluno->listarLivrosEmprestados());
 echo '<br>';
echo '<hr>';
echo '<br>';
echo 'PROFESSOR TESTE';
//testa a classe ptofessor;
echo '<pre>';

$professor = new Professor("samuel");
$professor->adicionarLivroEmprestado($livro1);
$professor->adicionarLivroEmprestado($livro2);
$professor->adicionarLivroEmprestado($livro2);
if($professor->podePegarEmprestado()){
    echo 'O professor pode pegar livros emprestados <br>';
}else
{
    echo 'O professor não pode pegar livros emprestados <br>';
}
var_dump($professor->listarLivrosEmprestados());
?>