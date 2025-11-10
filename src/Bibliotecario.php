<?php

namespace Marcos\Biblioteca;

class Bibliotecario{
     public function emprestarLivro(Usuario $usuario, Livro $livro, Estante $estante):bool{
        if(!$livro->estaDisponivel()){
            echo " <br>o livro não está disponivel! <br> ";
            return false;
        }
        if(!$usuario->podePegarEmprestado()){
            echo " <br>o usuario não pode pegar livros emprestados!  <br>";
            return false;
        }
        if(!$estante->buscarLivroPorTitulo($livro->getTitulo())){
              echo " <br>o livro não está estante! <br> ";
            return false;
        }

        $livro->marcarDisponivel();
        $usuario->adicionarLivroEmprestado($livro);
        $estante->removerLivro($livro);

        echo "Livro emprestado com exito!  <br> <hr>";
        return true;
     }
     
     

     public function devolverLivro(){

     }
}