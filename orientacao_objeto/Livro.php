<?php
    class Livro{

        private $titulo;
        private $autor;
        private $ano;
        //criando o construtor
        public function __construct($titulo, $autor, $ano) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->ano = $ano;

        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function setAutor($autor) {
            $this->autor = $autor;
        }

        public function getAutor() {
            return $this->autor;
        }

        public function setAno($ano) {
            if ($ano < 1900)
                $ano = 1900;
            $this->ano;
        }

        public function getAno() {
            return $this->ano;
        }
    }
$obj = new Livro("Livreto", "Zé do livro", 2077);

//verifica o que está na variavel
var_dump($obj);