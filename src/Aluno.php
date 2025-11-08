<?php
namespace Marcos\Biblioteca;

class Aluno extends Usuario{
    private int $maximoLivroEmprestado = 1;
    public function podePegarEmprestado(): bool
    {
       if(count($this->livrosEmprestados) < $this->maximoLivroEmprestado){
        return true;
       }
       return false;
    }
}
?>
 