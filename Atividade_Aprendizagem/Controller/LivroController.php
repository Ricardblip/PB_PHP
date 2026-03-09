<?php

session_start(); 
require_once "./Model/LivrosModel.php";

class LivroController{

    public function telaCadastro(){
        require "View/Cadastrar.php";
    }

    public function cadastrar(){
        $titulo= $_POST['titulo'];
        $autor= $_POST['autor'];

        $livro = new Livros($titulo, $autor);
        $livro->salvar();
        // redirecionar ao depois de salvar
        header('Location: /PB_PHP/Atividade_Aprendizagem/livros/telacontroller');
        exit;
    }

    public function listarLivro(){
        $livro = livros::listar();
        echo "<pre>";
        print_r($Livros);
        echo "</pre>";
        require 'View/livroListar.php';
    }

    public function telaEditar(){
        $livro = Livros ::buscar ($_GET['id']);
        require 'View/livroEditar.php';
    }

    public function atualizar(){
        $livro = new Livros($_POST['titulo'], $_POST['autor']);
        $livro->atualizar($_GET['id']);
        header('Location: /PB_PHP/Atividade_Aprendizagem/livros/telaEditar?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        livros::excluir($_GET['id']);
        header('Location: /PHP_PBE_2IDS_2025/Atividade_aprendizagem/livro?/listar');
        exit;
    }
}