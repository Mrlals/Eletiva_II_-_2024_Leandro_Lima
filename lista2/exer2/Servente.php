<?php
include 'Funcionario.php';

class Servente extends Funcionario {
    public function getSalarioLiquido() {
        $salarioBaseComAdicional = parent::getSalarioBase() * 1.05; // 5% de adicional
        $inss = $salarioBaseComAdicional * 0.1;
        $ir = 0.0;
        if ($salarioBaseComAdicional > 2000.0) {
            $ir = ($salarioBaseComAdicional - 2000.0) * 0.12;
        }
        return $salarioBaseComAdicional - $inss - $ir;
    }
}
?>
