<?php

namespace Marcos\Biblioteca;

class Professor extends Usuario{
    private int $maximoLivroEmprestado = 3;

    public  function podePegarEmprestado():bool{
        if(count($this->livrosEmprestados) < $this->maximoLivroEmprestado){
            return true;
        }
        return false;
    }
}
?>
