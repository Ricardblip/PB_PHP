<?php

session_start();

class Usuario{
    private $nome;
    private $sobrenome;
    private $nota;
    private $DataNascimento;

    public function_construct($nome, $sobrenome, $nota, $dataNascimento){
        $this->nome= $nome;
        $this->sobrenome= $sobrenome;
        $this->nota= $nota;
        $this->dataNascimento;

         public function salvar(){
            //criar o array se ainda nao existir
            if(!isset($_SESSION['usuarios'])){
                $_SESSION['usuarios'] = [];
    }
}
