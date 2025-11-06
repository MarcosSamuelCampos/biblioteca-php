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
        $this->livros = array_filter(
            //função anônima;
            $this->livros, function($livroAtual) use ($livro){

                echo 'livro atual: ' . $livroAtual->getTitulo();
                if ($livroAtual === $livro) {
                    //Se for o mesmo livro, imprime a mensagem “livro removido”
                    echo '- livro removido';
                   
                }
                 echo '<br>';
                return $livroAtual !== $livro;
            }
        );
     }
     //método que lista todos os livros relacionados aquele titulo
     public function buscarLivroPorTitulo(string $titulo):array{ 
          $livrosPorTitulos = [];
        foreach($this->livros as $livro){
            //funcao que verifica se tem livro com o titulo incompleto;
            if (str_contains(strtolower($livro->getTitulo()),strtolower($titulo))) {
                 $livrosPorTitulos[] = $livro;
            }
        }
        return $livrosPorTitulos;
     }
     public function listarLivrosDisponiveis():array{
     //TODO;
        return [];
     }
}

?>




