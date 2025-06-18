<form method="post">
    <h2>Registro de Temperaturas Diárias</h2>

    <?php for ($i = 0; $i < 7; $i++): ?>
        Temperatura <?= $i + 1 ?> (°C): <input type="number" step="0.1" name="temperaturas[]" required><br>
    <?php endfor; ?>

    <button type="submit">Calcular Máxima e Mínima</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperaturas = $_POST['temperaturas'];

    $temperaturas = array_filter($temperaturas, function($t) {
        return $t !== '';
    });
    $temperaturas = array_map('floatval', $temperaturas);

    $maxima = max($temperaturas);
    $minima = min($temperaturas);

    echo "<h3>Temperatura Máxima: $maxima °C</h3>";
    echo "<h3>Temperatura Mínima: $minima °C</h3>";
}
?>
