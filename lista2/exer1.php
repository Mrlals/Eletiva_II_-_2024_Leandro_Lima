<?php
// A partir da classe Ponto apresentada abaixo:
// Crie um construtor que recebe dois parâmetros de coordenadas X e Y;
// Introduza um atributo de classe para contar o número de objetos criados
// Faça com que o construtor atualize o contador de pontos
// Acrescente um método de classe para retornar o valor desse atributo de contagem
// Acrescente um método para calcular e retornar a distância entre a instância do ponto e um outro
// objeto Ponto qualquer;
// Acrescente um método para calcular e retornar distância entre a instância do ponto e um outro ponto
// dado pelas coordenadas X e Y;
// Acrescente um método para calcular e retornar a distância entre dois pontos, dadas as coordenadas
// X1, Y1 e X2, Y2 (como este método não utiliza nenhum atributo para fazer este cálculo, ele pode ser
// criado como um método de classe).
// A distância entre dois pontos é calculada por:


//private x: int
//private y: int

//public setX(x: int): void
//public getX(): int
//public setY(y: int): void
//public getY(): int
//public deslocar(dx: int, dy: int)
//public toString(): String

// Função raiz quadrada: sqrt( )
// Função potenciação: pow($base, $expoente)
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

    public function getX() {
        return $this->x;
    }

    public function setX($x) {
        $this->x = $x;
    }
    
    public function getY() {
        return $this->y;
    }
    
    public function setY($y) {
        $this->y = $y;
    }

    public function deslocar($dx, $dy) {
        $this->x += $dx;
        $this->y += $dy;
    }

    //usa as coordenadas x e y do objeto atual e as coordenadas x e y do objeto outroPonto
    //através da fórmula da distância euclidiana.
    public function calcDistEntrePontos($outroPonto) {
        return sqrt(pow($outroPonto->getX() - $this->x, 2) + pow($outroPonto->getY() - $this->y, 2));
    }

    //calcula a distância entre o ponto atual do objeto instanciado e coordenadas x e y 
    //fornecidas diretamente como parâmetros
    public function calcDistCoordenadas($x, $y) {
        return sqrt(pow($x - $this->x, 2) + pow($y - $this->y, 2));
    }

    // Calcula a distância entre dois pontos, coordenadas X1, Y1 e X2, Y2
    public static function calcDistancia($x1, $y1, $x2, $y2) {
        return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    }
}

?>
