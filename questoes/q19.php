<form method="post">
    <h2>Cadastro Inicial da Fila de Atendimento</h2>
    <?php for ($i = 0; $i < 3; $i++): ?>
        Paciente <?= $i + 1 ?>: <input type="text" name="fila[]"><br>
    <?php endfor; ?>
    <button type="submit">Atualizar Fila</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['fila'])) {
    $filaAtendimento = array_filter($_POST['fila'], function($p) {
        return !empty(trim($p));
    });

    array_unshift($filaAtendimento, "Ana Oliveira");

    array_push($filaAtendimento, "Luiz Fernandes");

    echo "<h3>Fila de Atendimento Atualizada:</h3><ul>";
    foreach ($filaAtendimento as $paciente) {
        echo "<li>$paciente</li>";
    }
    echo "</ul>";
}
?>
