<?php
require_once('vendor/autoload.php');

use Marcos\Biblioteca\Estante;
use Marcos\Biblioteca\Livro;
use Marcos\Biblioteca\Aluno;

echo 'sistama de biblioteca inciciado <br>';

$livro1 = new Livro("samuel", "teste1");
$livro2 = new Livro("samuel2", "teste12");
$livro1->marcarDisponivel();
$livro2->marcarDisponivel();
echo '<pre>';

$estante = new Estante();

$estante->adicionarLivro($livro1);
$estante->adicionarLivro($livro2);

echo '<hr>';

$LivroEncontrado = $estante->buscarLivroPorTitulo("teste");
var_dump($estante->listarLivrosDisponiveis());
echo '<hr>';
$aluno = new Aluno("samuel");
$aluno->adicionarLivroEmprestado($livro1);
$aluno->adicionarLivroEmprestado($livro2);

echo '<pre>';

var_dump($aluno->listarLivrosEmprestados());

?>