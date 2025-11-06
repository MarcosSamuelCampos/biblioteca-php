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
}

?>




