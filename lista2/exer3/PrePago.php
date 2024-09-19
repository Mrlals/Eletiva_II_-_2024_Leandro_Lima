<?php
class PrePago extends Celular {

    public function __construct($ddd, $numero, $custoMinutoBase, $operadora) {
        parent::__construct($ddd, $numero, $custoMinutoBase, $operadora);
    }

    public function calculaCusto($tempo) {
        return $tempo * $this->getCustoMinutoBase() * 1.4; // Aplicando acréscimo de 40%
    }
}
?>
