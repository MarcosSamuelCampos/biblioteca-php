<?php

namespace Marcos\Biblioteca;

class Livro{

    //propriedades privadas;
    private bool $disponivel = false;


    public function __construct(private string $autor,private string $titulo)
    {
        $this->autor = $autor;
        $this->titulo = $titulo;
    }
   
    public function estaDisponivel():bool
    { //método de negócio
        return $this->disponivel;
    }

    //métodos de ação
    public function marcarDisponivel(){
        $this->disponivel = true;
    }
      public function marcarEmprestimo(){
        $this->disponivel = true;
    }

    //métodos getters
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
}
