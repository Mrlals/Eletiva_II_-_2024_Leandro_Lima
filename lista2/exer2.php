<?php

// Analise o código da classe Funcionario
// A partir dessa classe, desenvolva as seguintes classes:
// Servente: classe derivada da classe Funcionario. Um servente recebe um adicional de 5% a título de
// insalubridade
// Motorista: classe derivada da classe Funcionario. Para cada motorista é necessário armazenar o
// número da carteira de motorista
// MestreDeObras: classe derivada da classe Servente. Para cada mestre de obras é necessário
// armazenar quantos funcionarios estão sob sua supervisão. Um mestre de obras ganha um adicional
// de 10% para cada grupo de 10 funcionários que estão sob seu comando.
// Em todas as classes devem ser acrescentados os métodos get/set necessários.

class Funcionario {
    private $nome;
    private $codigo;
    private $salarioBase;

    public function __construct($codigo, $nome, $salarioBase) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getSalarioBase() {
        return $this->salarioBase;
    }

    public function setSalarioBase($salarioBase) {
        $this->salarioBase = $salarioBase;
    }

    public function getSalarioLiquido() {
        $inss = $this->salarioBase * 0.1;
        $ir = 0.0;
        if ($this->salarioBase > 2000.0) {
            $ir = ($this->salarioBase - 2000.0) * 0.12;
        }
        return $this->salarioBase - $inss - $ir;
    }

    // Sobrescrevendo o método toString do php
    public function __toString() {
        return get_class($this) . "\n" 
            . "Codigo: " . $this->getCodigo() . "\n"
            . "Nome: " . $this->getNome() . "\n"
            . "Salario Base: " . $this->getSalarioBase() . "\n"
            . "Salario liquido: " . $this->getSalarioLiquido();
    }
}

class Servente extends Funcionario {
    protected $insalubridade = 0.05; // Adicional de 5%

    public function getSalarioLiquido() {
        $salarioBase = $this->getSalarioBase();
        $inss = $salarioBase * 0.1;
        $ir = 0.0;
        if ($salarioBase > 2000.0) {
            $ir = ($salarioBase - 2000.0) * 0.12;
        }
        return $salarioBase * (1 + $this->insalubridade) - $inss - $ir;
    }

    public function __toString() {
        return parent::__toString() . "\nAdicional de insalubridade: 5%";
    }
}

class Motorista extends Funcionario {
    private $numeroCarteira;

    public function __construct($codigo, $nome, $salarioBase, $numeroCarteira) {
        parent::__construct($codigo, $nome, $salarioBase);
        $this->numeroCarteira = $numeroCarteira;
    }

    public function getNumeroCarteira() {
        return $this->numeroCarteira;
    }

    public function setNumeroCarteira($numeroCarteira) {
        $this->numeroCarteira = $numeroCarteira;
    }

    public function __toString() {
        return parent::__toString() . "\nNúmero da Carteira de Motorista: " . $this->getNumeroCarteira();
    }
}

class MestreDeObras extends Servente {
    private $numeroFuncionarios;

    public function __construct($codigo, $nome, $salarioBase, $numeroFuncionarios) {
        parent::__construct($codigo, $nome, $salarioBase);
        $this->numeroFuncionarios = $numeroFuncionarios;
    }

    public function getNumeroFuncionarios() {
        return $this->numeroFuncionarios;
    }

    public function setNumeroFuncionarios($numeroFuncionarios) {
        $this->numeroFuncionarios = $numeroFuncionarios;
    }

    public function getSalarioLiquido() {
        $salarioBase = $this->getSalarioBase();
        $inss = $salarioBase * 0.1;
        $ir = 0.0;
        if ($salarioBase > 2000.0) {
            $ir = ($salarioBase - 2000.0) * 0.12;
        }
        
        $adicionalFuncionarios = floor($this->numeroFuncionarios / 10) * 0.10; // 10% para cada grupo de 10 funcionários
        return $salarioBase * (1 + $this->insalubridade + $adicionalFuncionarios) - $inss - $ir;
    }

    public function __toString() {
        return parent::__toString() . "\nNúmero de Funcionários Sob Supervisão: " . $this->getNumeroFuncionarios();
    }
}

?>

