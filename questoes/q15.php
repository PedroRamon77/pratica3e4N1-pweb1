<form method="post">
    <h2>Registro de Treinos dos Alunos (Para Melhor Resultado)</h2>
    <?php for ($i = 0; $i < 3; $i++): ?>
        <fieldset>
            <legend>Aluno <?= $i + 1 ?></legend>
            Nome: <input type="text" name="alunos[<?= $i ?>][nome]"><br>
            <?php for ($j = 0; $j < 3; $j++): ?>
                Resultado da Sessão <?= $j + 1 ?>: <input type="number" step="0.01" name="alunos[<?= $i ?>][resultados][]"><br>
            <?php endfor; ?>
        </fieldset>
        <br>
    <?php endfor; ?>
    <button type="submit">Ver Melhor Resultado</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['alunos'])) {
    $registrosTreino = $_POST['alunos'];

    echo "<h3>Melhor Resultado de Cada Aluno:</h3>";
    foreach ($registrosTreino as $aluno) {
        $nome = trim($aluno['nome']);
        $resultados = array_filter($aluno['resultados'], function($r) {
            return $r !== '';
        });

        if (!empty($nome) && !empty($resultados)) {
            $melhor = max($resultados);
            echo "<p>Aluno: $nome - Melhor Resultado: " . number_format($melhor, 2, ',', '.') . "</p>";
        }
    }
}
?>
