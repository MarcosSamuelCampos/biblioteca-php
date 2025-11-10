<?php

namespace Marcos\Biblioteca;

class Bibliotecario{
     public function emprestarLivro(Usuario $usuario, Livro $livro, Estante $estante):bool{
        if(!$livro->estaDisponivel()){
            return false;
        }
        if(!$usuario->podePegarEmprestado()){
            return false;
        }
        if(!$estante->buscarLivroPorTitulo($livro->getTitulo())){
            return false;
        }

        $livro->marcarDisponivel();
        $usuario->adicionarLivroEmprestado($livro);
        $estante->removerLivro($livro);
        return true;
     }
     
     

     public function devolverLivro(){

     }
}