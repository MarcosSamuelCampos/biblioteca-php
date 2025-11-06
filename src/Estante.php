<?php

namespace Marcos\Biblioteca;

class Estante{

    private array $livros = [];

    public function adicionarLivro(Livro $livro):void{
     $this->livros[] = $livro;
    }
     
}

?>




