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
    public function estaDisponivel():bool
    {
        return $this->disponivel;
    }
    public function marcarDisponivel(){
        $this->disponivel = true;
    }
      public function marcarEmprestimo(){
        $this->disponivel = false;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
}
