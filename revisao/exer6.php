<?php require("cabecalho.php"); ?>
<h1>Exercício 6</h1>
<form action="" method="post">
    <label for="horas_previstas">Horas Previstas:</label>
    <input type="number"  name="horas_previstas" id="horas_previstas" required><br><br>

    <label for="taxa_por_hora">Taxa por Hora (R$):</label>
    <input type="number"  name="taxa_por_hora" id="taxa_por_hora" required><br><br>

    <label for="custos_adicionais">Custos Adicionais (R$):</label>
    <input type="number"  name="custos_adicionais" id="custos_adicionais" required><br><br>

    <button type="submit" class="btn btn-danger">Calcular</button>
</form>

<?php
if ($_POST) {
    $horas_previstas = floatval($_POST['horas_previstas']);
    $taxa_por_hora = floatval($_POST['taxa_por_hora']);
    $custos_adicionais = floatval($_POST['custos_adicionais']);
    $custo_mao_de_obra = $horas_previstas * $taxa_por_hora;
    $custo_total_projeto = $custo_mao_de_obra + $custos_adicionais;

    echo "Custo de Mão de Obra: R$ " . number_format($custo_mao_de_obra, 2, ',', '.') . "<br>";
    echo "Custo Total do Projeto: R$ " . number_format($custo_total_projeto, 2, ',', '.');
}
require("rodape.php"); ?>