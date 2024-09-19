<?php
// Incluindo as classes
include 'Telefone.php';
include 'Fixo.php';
include 'Celular.php';
include 'PrePago.php';
include 'PosPago.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipoTelefone = $_POST['tipoTelefone'];
    $ddd = $_POST['ddd'];
    $numero = $_POST['numero'];
    $tempo = $_POST['tempo'];
    $custoMinuto = $_POST['custoMinuto'];
    $operadora = isset($_POST['operadora']) ? $_POST['operadora'] : '';

    $telefone = null;

    switch ($tipoTelefone) {
        case 'fixo':
            $telefone = new Fixo($ddd, $numero, $custoMinuto);
            break;
        case 'prepago':
            $telefone = new PrePago($ddd, $numero, $custoMinuto, $operadora);
            break;
        case 'pospago':
            $telefone = new PosPago($ddd, $numero, $custoMinuto, $operadora);
            break;
        default:
            echo "Tipo de telefone inválido!";
            exit;
    }

    $custoTotal = $telefone->calculaCusto($tempo);
    echo "<h1>Custo da Ligação</h1>";
    echo "Tipo de Telefone: " . ucfirst($tipoTelefone) . "<br>";
    echo "Número: ($ddd) $numero<br>";
    echo "Operadora: " . ($operadora ? $operadora : 'N/A') . "<br>";
    echo "Tempo da Ligação: $tempo minutos<br>";
    echo "Custo Total: R$ " . number_format($custoTotal, 2, ',', '.') . "<br>";
}
?>
