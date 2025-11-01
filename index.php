<?php
require_once('vendor/autoload.php');

use Marcos\Biblioteca\Livro;

echo 'sistama de biblioteca inciciado <br>';

$livro = new Livro("samuel", "teste1");
echo '<pre>';

echo 'Livro: '. $livro->getTitulo() . '<br>';
echo 'Autor: '. $livro->getAutor() . '<br>';
echo 'Disponibilidade: '. ($livro->estaDisponivel() ? 'sim' : 'nao') . '<br>';

?>