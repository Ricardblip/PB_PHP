<?php

class Livro{
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor){
        $this->titulo = $titulo;
        $this->autor = $autor;
    }


    public function conectar(){
        if(!isset($_SESSION['livros'])){
            $_SESSION['livros']= [];
        }

        $_SESSION['livros'][]= [
            'titulo'=> $this->titulo,
            'autor'=> $this->autor,
        ];
    }
    public static function inserir(){
        //retorna a lista de livros
        return $_SESSION['livros'] ??[];
    }

    public static function selecionar($id){
        return $_SESSION['livros'] [$id] ?? null;
    }

    public function atualizar($id){
        if(isset($_SESSION['livros'][$id])){
            $_SESSION['livros'][$id] = [
                'titulo' => $this->titulo,
                'autor' => $this->autor,
            ];
        }
    }

    public static function excluir($id){
        if(isset($_SESSION['livros'][$id])){//verifica se o usuario existe
            unset($_SESSION['livros'][$id]); // deletar o usuario
            }
    }
}