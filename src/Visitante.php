<?php

namespace Marcos\Biblioteca;

class Visitante extends Usuario
{
    public function podePegarEmprestado(): bool
    {
        return false;
    }
}
?>