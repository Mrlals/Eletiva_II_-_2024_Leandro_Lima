<?php
include 'Servente.php';

class MestreDeObras extends Servente {
    private $funcionariosSupervisionados;

    public function __construct($codigo, $nome, $salarioBase, $funcionariosSupervisionados) {
        parent::__construct($codigo, $nome, $salarioBase);
        $this->funcionariosSupervisionados = $funcionariosSupervisionados;
    }

    public function getSalarioLiquido() {
        $salarioBaseComAdicional = parent::getSalarioBase() * 1.05; // 5% de adicional
        $adicional = (int)($this->funcionariosSupervisionados / 10) * 0.10;
        $salarioBaseComAdicional *= (1 + $adicional);
        $inss = $salarioBaseComAdicional * 0.1;
        $ir = 0.0;
        if ($salarioBaseComAdicional > 2000.0) {
            $ir = ($salarioBaseComAdicional - 2000.0) * 0.12;
        }
        return $salarioBaseComAdicional - $inss - $ir;
    }

    public function getFuncionariosSupervisionados() {
        return $this->funcionariosSupervisionados;
    }

    public function setFuncionariosSupervisionados($funcionariosSupervisionados) {
        $this->funcionariosSupervisionados = $funcionariosSupervisionados;
    }

    public function __toString() {
        return parent::__toString() . "\n" .
               "Funcionários Supervisionados: " . $this->getFuncionariosSupervisionados();
    }
}
?>
