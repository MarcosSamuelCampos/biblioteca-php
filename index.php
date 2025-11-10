<?php
require_once('vendor/autoload.php');

//importação das classes
use Marcos\Biblioteca\Estante;
use Marcos\Biblioteca\Livro;
use Marcos\Biblioteca\Aluno;
use Marcos\Biblioteca\Professor;
use Marcos\Biblioteca\Visitante;
use Marcos\Biblioteca\Bibliotecario;

echo 'sistama de biblioteca inciciado <br>';

//criando objetos da classe (livro);
$livro1 = new Livro("samuel", "PHP 8");
$livro2 = new Livro("marcos", "javascript");
$livro3 = new Livro("samuca", "java");
$livro1->marcarDisponivel();
$livro2->marcarDisponivel();

//add livros no objeto (estante);
$estante = new Estante();
$estante->adicionarLivro($livro1);
$estante->adicionarLivro($livro2);
$estante->adicionarLivro($livro3);

$titulo = "java";
$livroBuscado = $estante->buscarLivroPorTitulo($titulo);

echo '<pre>';
echo "Livros buscados com a palavra: ". $titulo . "<br>";
print_r($livroBuscado);
echo "<hr>";
$aluno = new Aluno("samucael");
$aluno1 = new Aluno("campos");

$bibliotecario = new Bibliotecario();


$bibliotecario->emprestarLivro($aluno,$livro1,$estante);
$bibliotecario->devolverLivro($aluno,$livro1,$estante);
$bibliotecario->emprestarLivro($aluno1,$livro1,$estante);
?>