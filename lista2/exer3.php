<?php

// Crie a seguinte hierarquia para representar diferentes tipos de telefones:
// Telefone: abstrata, representa o DDD e o número de um telefone, define um método abstrato
// calculaCusto (da ligação, recebe como parâmetro o tempo da ligacão)
// Fixo: derivada de Telefone, também armazena o custo por minuto, e sobrescreve calculaCusto,
// multiplicando o tempo da ligacão pelo custo do minuto
// Celular: abstrata, derivada de Telefone, também armazena o custo do minuto base, e o nome da
// operadora
// PrePago: derivada de Celular, calcula o custo da ligacão aplicando um acréscimo de 40% no custo do
// minuto base
// PosPago: derivada de Celular, calcula o custo da ligacão aplicando um desconto de 10% no custo do
// minuto base

abstract class Telefone {
    protected $ddd;
    protected $numero;

    public function __construct($ddd, $numero) {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }

    abstract public function calculaCusto($tempo);
}

class Fixo extends Telefone {
    private $custoPorMinuto;

    public function __construct($ddd, $numero, $custoPorMinuto) {
        parent::__construct($ddd, $numero);
        $this->custoPorMinuto = $custoPorMinuto;
    }

    public function calculaCusto($tempo) {
        return $tempo * $this->custoPorMinuto;
    }
}

abstract class Celular extends Telefone {
    protected $custoMinutoBase;
    protected $operadora;

    public function __construct($ddd, $numero, $custoMinutoBase, $operadora) {
        parent::__construct($ddd, $numero);
        $this->custoMinutoBase = $custoMinutoBase;
        $this->operadora = $operadora;
    }
}

class PrePago extends Celular {
    public function calculaCusto($tempo) {
        return $tempo * $this->custoMinutoBase * 1.40; // Acréscimo de 40%
    }
}

class PosPago extends Celular {
    public function calculaCusto($tempo) {
        return $tempo * $this->custoMinutoBase * 0.90; // Desconto de 10%
    }
}

?>
