<?php require("cabecalho.php"); ?>
<h1>Exercício 3</h1>

<form action="" method="post">
    <label for="lucros">Lucros da Empresa (R$):</label>
    <input type="number" name="lucros" id="lucros" required><br><br>

    <label for="nome_funcionario">Nome do Funcionário:</label>
    <input type="text" name="nome_funcionario" id="nome_funcionario" required><br><br>

    <label for="desempenho">Desempenho (Escala de 1 a 5):</label>
    <input type="number" name="desempenho" min="1" max="5" id="desempenho" required><br><br>

    <button type="submit" class="btn btn-danger">Calcular Bônus</button>
</form>

<?php
if ($_POST) {
    $lucros = floatval($_POST['lucros']);
    $nome_funcionario = $_POST['nome_funcionario'];
    $desempenho = intval($_POST['desempenho']);
    
    $percentual_bonus = 0.0;

    switch ($desempenho) {
        case 1:
            $percentual_bonus = 0.001; // 0,1% do lucro
            break;
        case 2:
            $percentual_bonus = 0.003; 
            break;
        case 3:
            $percentual_bonus = 0.005;
            break;
        case 4:
            $percentual_bonus = 0.006; 
            break;
        case 5:
            $percentual_bonus = 0.007; 
            break;
        default:
            echo "Desempenho inválido!";
            exit;
    }
    // Calculo do bonus
    $bonus = $lucros * $percentual_bonus;

    echo "Funcionário: " . htmlspecialchars($nome_funcionario) . "<br>";
    echo "Desempenho: " . $desempenho . "<br>";
    echo "Bônus: R$ " . number_format($bonus, 2, ',', '.');
}

require("rodape.php"); ?>