<?php
abstract class Celular extends Telefone {
    private $custoMinutoBase;
    private $operadora;

    public function __construct($ddd, $numero, $custoMinutoBase, $operadora) {
        parent::__construct($ddd, $numero);
        $this->custoMinutoBase = $custoMinutoBase;
        $this->operadora = $operadora;
    }

    public function getCustoMinutoBase() {
        return $this->custoMinutoBase;
    }

    public function getOperadora() {
        return $this->operadora;
    }
}
?>
