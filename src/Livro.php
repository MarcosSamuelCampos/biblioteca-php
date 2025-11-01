<?php

namespace Marcos\Biblioteca;

class Livro{
    private string $autor;
    private string $titulo;
    private bool $disponivel = false;


    public function __construct(string $autor,string $titulo)
    {
        $this->autor = $autor;
        $this->titulo = $titulo;
    }
}