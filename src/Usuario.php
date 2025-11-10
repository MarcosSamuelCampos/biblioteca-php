<?php

namespace Marcos\Biblioteca;

abstract class  Usuario{

     protected array $livrosEmprestados = [];  

      public function __construct(protected string $nome) {
        $this->nome = $nome;
     }
     public function adicionarLivroEmprestado(Livro $livro) : void 
     {
        if ($this->podePegarEmprestado()) {
                $this->livrosEmprestados[] = $livro;
        }else{
            throw new \Exception("O usuário não pode pegar livros emprestados");
            
        }
        
     }
     public function removerLivroEmprestado(Livro $livro): void{
        $this->livrosEmprestados = array_filter(
            $this->livrosEmprestados,fn($livroAtual) => $livroAtual !== $livro
        );
     }
     public function listarLivrosEmprestados():array{
         return $this->livrosEmprestados;
     }
     abstract public function podePegarEmprestado():bool;
      public function getNome():string{
         return $this->nome;
}


}
?>