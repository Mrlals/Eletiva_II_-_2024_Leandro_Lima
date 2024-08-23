<?php

abstract class Animal{

    protected $nome;
    protected $raca;

    abstract public function fazerBarulho();

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setraca($raca){
        $this->raca = $raca;
    }

    public function getraca(){
        return $this->raca;
    }
}

class Cachorro extends Animal{
    private $pelagem;

    public function setpelagem($pelagem){
        $this->pelagem = $pelagem;
    }

    public function getpelagem(){
        return $this->pelagem;
    }

    public function fazerBarulho()
    {
        return "Au au";
    }
}