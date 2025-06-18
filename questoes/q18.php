<form method="post">
    <h2>Cadastro das Leituras do Sensor</h2>
    <?php for ($i = 0; $i < 7; $i++): ?>
        Leitura <?= $i + 1 ?>: <input type="number" step="0.1" name="leituras[]"><br>
    <?php endfor; ?>
    <button type="submit">Filtrar Leituras Acima de 25.0</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['leituras'])) {
    $dadosSensor = array_filter($_POST['leituras'], function($valor) {
        return $valor !== '';
    });

    $leiturasFiltradas = array_filter($dadosSensor, function($valor) {
        return $valor > 25.0;
    });

    echo "<h3>Leituras acima de 25.0:</h3><ul>";
    foreach ($leiturasFiltradas as $leitura) {
        echo "<li>$leitura</li>";
    }
    echo "</ul>";
}
?>
