<?php

namespace Marcos\Biblioteca;

class Bibliotecario{
     public static function emprestarLivro(Usuario $usuario, Livro $livro, Estante $estante):bool{
        if(!$livro->estaDisponivel()){
            throw new \Exception("O livro não está disponivel!");
            return false;
        }
        if(!$usuario->podePegarEmprestado()){
            throw new \Exception("O usuario não pode pegar livros emprestados! ");
            return false;
        }
        if(!$estante->verificarLivro($livro)){
             throw new \Exception( "O livro não está na estante! ");
            return false;
        }

        $livro->marcarEmprestimo();
        $usuario->adicionarLivroEmprestado($livro);
        $estante->removerLivro($livro);
        return true;

     }
     public static function devolverLivro(Usuario $usuario, Livro $livro, Estante $estante): bool{
        if($livro->estaDisponivel()){
            throw new \Exception(" O livro não está emprestado! ");
            return false;
        }
        if($estante->verificarLivro($livro)){
          throw new \Exception("O livro já está na estante! ");
            return false;
        }
        if(!in_array($livro, $usuario->listarLivrosEmprestados() )){
           throw new \Exception('O livro não está com o usuario!');
            return false;
        }
         
     $usuario->removerLivroEmprestado($livro);

     $estante->adicionarLivro($livro);    
     $livro->marcarDisponivel();
    return true;

     }
}