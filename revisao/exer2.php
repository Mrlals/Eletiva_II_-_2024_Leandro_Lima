<?php require("cabecalho.php"); ?>
<h1>Exercício 2</h1>
<form action="exer2.php" method="post">
    <label for="horas_trabalhadas_mes" class="form-label">Total de Horas Trabalhadas no Mês:</label>
    <input type="number" name="horas_trabalhadas_mes" id="horas_trabalhadas_mes"  required><br><br>

    <label for="valor_hora" class="form-label">Valor da Hora Trabalhada (R$):</label>
    <input type="number" name="valor_hora" id="valor_hora" required><br><br>

    <label for="semanas_mes" class="form-label">Número de Semanas no Mês:</label>
    <input type="number" name="semanas_mes" id="semanas_mes" required><br><br>

    <button type="submit" class="btn btn-danger">Calcular</button>
</form>

<?php
if ($_POST) {

    $horas_trabalhadas_mes = floatval($_POST['horas_trabalhadas_mes']);
    $valor_hora = floatval($_POST['valor_hora']);
    $semanas_mes = intval($_POST['semanas_mes']);

    if ($semanas_mes <= 0) {
        echo "Número de semanas inválido!";
    } else {
        $horas_por_semana = $horas_trabalhadas_mes / $semanas_mes;
        
        $salario_semanal = $horas_por_semana * $valor_hora;
        
        echo "O salário semanal é: R$ " . number_format($salario_semanal, 2, ',', '.');
    }
}

require("rodape.php"); ?>