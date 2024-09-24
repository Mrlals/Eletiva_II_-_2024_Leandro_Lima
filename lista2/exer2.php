<?php require("cabecalho.php");

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

    // Sobrescrevendo o método toString
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

