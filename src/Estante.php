<?php

namespace Marcos\Biblioteca;

class Estante{
    private array $livros = [];

    public function adicionarLivro(Livro $livro):void
    {
     $this->livros[] = $livro;
    }
     public function removerLivro(Livro $livro):void
     {
        $this->livros = array_filter(    //função anônima;
            $this->livros,
             function($livroAtual) use ($livro)
            {
                return $livroAtual !== $livro;
            }
        );
     }
     public function verificarLivro(Livro $livro): bool{
        return in_array($livro,$this->livros);
     }


     //método que lista todos os livros relacionados aquele titulo
     public function buscarLivroPorTitulo(string $titulo):array
     { 
        $livrosPorTitulos = [];
        foreach($this->livros as $livro)
        {
        //funcao que verifica se tem livro com o titulo incompleto;
            if (str_contains(strtolower($livro->getTitulo()),strtolower($titulo)))
            {
                $livrosPorTitulos[] = $livro;
            }
        }
        return $livrosPorTitulos;
     }
     public function listarLivrosDisponiveis():array
     {
        //compara o livro atual com array livro e retorna se está disponivel ou não;
        return array_filter($this->livros, function($livroAtual)
        {
            return $livroAtual->estaDisponivel();
        });
     }
}
?>