<?php

class Funcionario {
    protected $nome;
    protected $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function getNome() {
        return $this->nome;
    }
}

class Servente extends Funcionario {
    public function getSalario() {
        return parent::getSalario() * 1.05; // 5% de adicional
    }
}

class Motorista extends Funcionario {
    private $numeroCarteira;

    public function __construct($nome, $salario, $numeroCarteira) {
        parent::__construct($nome, $salario);
        $this->numeroCarteira = $numeroCarteira;
    }

    public function getNumeroCarteira() {
        return $this->numeroCarteira;
    }
}

class MestreDeObras extends Servente {
    private $funcionariosSupervisionados;

    public function __construct($nome, $salario, $funcionariosSupervisionados) {
        parent::__construct($nome, $salario);
        $this->funcionariosSupervisionados = $funcionariosSupervisionados;
    }

    public function getSalario() {
        $adicional = (int)($this->funcionariosSupervisionados / 10) * 0.10;
        return parent::getSalario() * (1 + $adicional);
    }
}

?>
