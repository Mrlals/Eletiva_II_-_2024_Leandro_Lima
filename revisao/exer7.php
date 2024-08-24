<?php require("cabecalho.php"); ?>
<h1>Exercício 7</h1>
<form action="" method="post">
    <label for="prazo_projeto">Prazo do Projeto (dias):</label>
    <input type="number" name="prazo_projeto" id="prazo_projeto" required><br><br>

    <label for="total_atividades">Total de Atividades:</label>
    <input type="number" name="total_atividades" id="total_atividades" required><br><br>

    <label for="atividades_concluidas">Atividades Concluídas:</label>
    <input type="number" name="atividades_concluidas" id="atividades_concluidas" required><br><br>

    <label for="produtividade_diaria">Produtividade da Equipe (atividades/dia):</label>
    <input type="number" name="produtividade_diaria" id="produtividade_diaria" required><br><br>

    <button type="submit" class="btn btn-danger">Simular</button>
</form>
<?php
if ($_POST) {

    $prazo_projeto = intval($_POST['prazo_projeto']);
    $total_atividades = intval($_POST['total_atividades']);
    $atividades_concluidas = intval($_POST['atividades_concluidas']);
    $produtividade_diaria = intval($_POST['produtividade_diaria']);

    $atividades_restantes = $total_atividades - $atividades_concluidas;

    $dias_necessarios = ceil($atividades_restantes / $produtividade_diaria);

    if ($dias_necessarios <= $prazo_projeto) {
        $mensagem = "O projeto está dentro do prazo. Faltam $atividades_restantes atividades, e serão necessários $dias_necessarios dias para completá-las.";
    } else {
        $dias_excedidos = $dias_necessarios - $prazo_projeto;
        $mensagem = "O projeto não será concluído dentro do prazo. Faltam $atividades_restantes atividades, e serão necessários $dias_necessarios dias para completá-las, o que excede o prazo em $dias_excedidos dias.";
    }

    echo "<h2>Resultado da Simulação:</h2>";
    echo "<p>$mensagem</p>";
}
require("rodape.php"); ?>