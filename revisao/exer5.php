<?php require("cabecalho.php"); ?>
<h1>Exercício 5</h1>
<form action="" method="post">
    <label for="dias_trabalhados">Dias Trabalhados:</label>
    <input type="number" name="dias_trabalhados" required><br><br>

    <button type="submit" class="btn btn-danger">Calcular Dias de Férias</button>
</form>
<?php
if ($_POST) {
    $dias_trabalhados = intval($_POST['dias_trabalhados']);
    
    $dias_ferias = intdiv($dias_trabalhados, 30);
    
    if ($dias_ferias > 30) {
        $dias_ferias = 30;
    }
    
    echo "Você tem direito a $dias_ferias dias de férias.";
}
require("rodape.php"); ?>