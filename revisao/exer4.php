<?php require("cabecalho.php"); ?>
<h1>Exercício 4</h1>
<form action="" method="post">
    <h2>Dados da Tarefa</h2>
    <label for="nome_tarefa">Nome da Tarefa:</label>
    <input type="text" name="nome_tarefa" id="nome_tarefa" required><br><br>

    <label for="horas_tarefa">Total de Horas da Tarefa:</label>
    <input type="number" name="horas_tarefa" id="horas_tarefa" required><br><br>

    <label for="complexidade">Complexidade da Tarefa:</label>
    <select name="complexidade" required>
        <option value="baixa">Baixa</option>
        <option value="media">Média</option>
        <option value="alta">Alta</option>
    </select><br><br>

    <h2>Dados do Funcionário</h2>
    <label for="nome_funcionario">Nome do Funcionário:</label>
    <input type="text" name="nome_funcionario" id="nome_funcionario" required><br><br>

    <label for="horas_disponiveis">Horas Disponíveis de Trabalho:</label>
    <input type="number" name="horas_disponiveis" id="horas_disponiveis" required><br><br>

    <label for="nivel_experiencia">Nível de Experiência:</label>
    <select name="nivel_experiencia" required>
        <option value="junior">Júnior</option>
        <option value="pleno">Pleno</option>
        <option value="senior">Sênior</option>
    </select><br><br>

    <button type="submit" class="btn btn-danger">Verificar</button>
</form>
<?php
if ($_POST) {
    $nome_tarefa = $_POST['nome_tarefa'];
    $horas_tarefa = floatval($_POST['horas_tarefa']);
    $complexidade = $_POST['complexidade'];

    $nome_funcionario = $_POST['nome_funcionario'];
    $horas_disponiveis = floatval($_POST['horas_disponiveis']);
    $nivel_experiencia = $_POST['nivel_experiencia'];

    $horas_necessarias = $horas_tarefa * 1.10; // 10% a + do tempo solicitado
    if ($horas_disponiveis < $horas_necessarias) {
        echo "O funcionário $nome_funcionario não tem horas disponíveis suficientes para a tarefa $nome_tarefa.<br>";
    } else {
        // Validar a compatibilidade da experiência com a complexidade da tarefa
        $pode_executar = false;

        if ($nivel_experiencia == 'junior' && $complexidade == 'baixa') {
            $pode_executar = true;
        } elseif ($nivel_experiencia == 'pleno' && in_array($complexidade, ['baixa', 'media'])) {
            $pode_executar = true;
        } elseif ($nivel_experiencia == 'senior' && in_array($complexidade, ['media', 'alta'])) {
            $pode_executar = true;
        }

        if ($pode_executar) {
            echo "O funcionário $nome_funcionario pode realizar a tarefa $nome_tarefa.<br>";
        } else {
            echo "O funcionário $nome_funcionario não está qualificado para realizar a tarefa $nome_tarefa.<br>";
        }
    }
}
require("rodape.php"); ?>