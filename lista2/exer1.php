<?php require("cabecalho.php");

class Ponto {
    // contador do número de objetos criados
    private static $contador = 0;

    private $x;
    private $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
        self::$contador++;
    }

    public static function getContador() {
        return self::$contador;
    }

    public function calcularDistanciaEntrePontos($outroPonto) {
        return sqrt(pow($outroPonto->x - $this->x, 2) + pow($outroPonto->y - $this->y, 2));
    }

    // Calcula a distância entre esta instância e um ponto das coordenadas X e Y
    public function calcularDistanciaCoordenadas($x, $y) {
        return sqrt(pow($x - $this->x, 2) + pow($y - $this->y, 2));
    }

    // Calcula a distância entre dois pontos, coordenadas X1, Y1 e X2, Y2
    public static function calcularDistancia($x1, $y1, $x2, $y2) {
        return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    }
}

?>
