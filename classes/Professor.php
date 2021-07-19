<?php

class Professor{
    private $codigo;
    private $nome;

    public function setProfessor($codigo, $nome){
        $this->codigo=$codigo;
        $this->nome=$nome;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function getNome(){
        return $this->nome;
    }
}