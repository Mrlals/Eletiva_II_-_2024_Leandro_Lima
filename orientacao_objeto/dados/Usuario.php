<?php

namespace orientacao_objeto\dados;

class Usuario {

    private $email ="l@l.com";

    public function exibirEmail(){
        echo $this->email;
    }
}