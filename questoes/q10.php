<form method="post">
    <h2>Cadastro dos Participantes</h2>

    <h3>Digite os nomes dos participantes:</h3>
    <?php for ($i = 0; $i < 8; $i++): ?>
        Participante <?= $i + 1 ?>: <input type="text" name="participantes[]" ><br>
    <?php endfor; ?>

    <button type="submit">Gerar Lista Única</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $listaParticipantes = array_filter($_POST['participantes'], function($nome) {
        return trim($nome) !== '';
    });

    $listaParticipantes = array_map('trim', $listaParticipantes);

    $listaUnica = array_unique($listaParticipantes);

    echo "<h3>Lista Única de Participantes:</h3><ul>";
    foreach ($listaUnica as $participante) {
        echo "<li>" . htmlspecialchars($participante) . "</li>";
    }
    echo "</ul>";
}
?>
