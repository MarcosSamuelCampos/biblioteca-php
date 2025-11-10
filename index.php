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

try{
    if(Bibliotecario::emprestarLivro($aluno,$livro1,$estante)){
        echo "Livro: {$livro1->getTitulo()} emprestado para: {$aluno->getNome()} <br>";
    if(Bibliotecario::devolverLivro($aluno,$livro1,$estante)){
        echo "Livro: {$livro2->getTitulo()} devolvido por: {$aluno->getNome()} <br>";
    }
 }
}catch(\Exception $error){
    echo "Erro: ". $error->getMessage() . "<br>";
}

Bibliotecario::emprestarLivro($aluno1,$livro1,$estante);
?>