<?php
include 'Funcionario.php';
include 'Servente.php';
include 'Motorista.php';
include 'MestreDeObras.php';

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$salarioBase = $_POST['salarioBase'];
$tipoFuncionario = $_POST['tipoFuncionario'];

$funcionario = null;

switch ($tipoFuncionario) {
    case 'Servente':
        $funcionario = new Servente($codigo, $nome, $salarioBase);
        break;
    case 'Motorista':
        $numeroCarteira = $_POST['numeroCarteira'];
        $funcionario = new Motorista($codigo, $nome, $salarioBase, $numeroCarteira);
        break;
    case 'MestreDeObras':
        $funcionariosSupervisionados = $_POST['funcionariosSupervisionados'];
        $funcionario = new MestreDeObras($codigo, $nome, $salarioBase, $funcionariosSupervisionados);
        break;
    default:
        echo "Tipo de funcionário inválido.";
        exit;
}

echo "<h1>Informações do Funcionário</h1>";
echo "<pre>" . $funcionario . "</pre>";
?>
