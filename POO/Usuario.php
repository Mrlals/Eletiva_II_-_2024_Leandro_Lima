<?php

namespace orientacao_objeto;

    class usuario{

        private $nome = "joão";

        public function exibirNome(){
            echo $this->nome;
        }
    }