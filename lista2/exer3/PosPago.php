<?php
class PosPago extends Celular {

    public function __construct($ddd, $numero, $custoMinutoBase, $operadora) {
        parent::__construct($ddd, $numero, $custoMinutoBase, $operadora);
    }

    public function calculaCusto($tempo) {
        return $tempo * $this->getCustoMinutoBase() * 0.9; // Aplicando desconto de 10%
    }
}
?>
