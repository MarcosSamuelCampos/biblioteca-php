<?php
require_once('vendor/autoload.php');

use Marcos\Biblioteca\Estante;
use Marcos\Biblioteca\Livro;

echo 'sistama de biblioteca inciciado <br>';

$livro1 = new Livro("samuel", "teste1");
$livro2 = new Livro("samuel2", "teste12");
echo '<pre>';

$estante = new Estante();

$estante->adicionarLivro($livro1);
$estante->adicionarLivro($livro2);
echo '<pre>';
print_r($estante);
echo '<hr>';
$estante->removerLivro($livro1);
print_r($estante);
?>