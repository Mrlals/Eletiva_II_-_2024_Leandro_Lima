<?php
include 'Funcionario.php';

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
        return parent::__toString() . "\n" .
               "Número da Carteira de Motorista: " . $this->getNumeroCarteira();
    }
}
?>
