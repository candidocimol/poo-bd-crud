<?php

class Turma{
    private $codigo;
    private $curso;
    private $nome;
    private $professor;

    public function setTurma($codigo, $curso, $nome, $professor){
        $this->codigo=$codigo;
        $this->curso=$curso;
        $this->nome=$nome;
        $this->professor=$professor;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function getNome(){
        return $this->nome;
    }    
    public function getCurso(){
        return $this->curso;
    }
    public function getProfessor(){
        return $this->professor;
    }

}