<form method="post">
    <h2>Gestão de Preços - Aplicar aumento de 10%</h2>

    <?php for ($i = 0; $i < 4; $i++): ?>
        Preço antigo <?= $i + 1 ?>: <input type="number" step="0.01" name="precosAntigos[]" required><br>
    <?php endfor; ?>

    <button type="submit">Aplicar aumento</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $precosAntigos = $_POST['precosAntigos'];

    $precosAntigos = array_map('floatval', $precosAntigos);

    $precosNovos = array_map(function($preco) {
        return round($preco * 1.10, 2);
    }, $precosAntigos);

    echo "<h3>Preços Antigos:</h3><ul>";
    foreach ($precosAntigos as $preco) {
        echo "<li>R$ " . number_format($preco, 2, ',', '.') . "</li>";
    }
    echo "</ul>";

    echo "<h3>Preços com 10% de aumento:</h3><ul>";
    foreach ($precosNovos as $preco) {
        echo "<li>R$ " . number_format($preco, 2, ',', '.') . "</li>";
    }
    echo "</ul>";
}
?>
