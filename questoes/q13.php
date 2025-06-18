<form method="post">
    <h2>Registro de Despesas Mensais</h2>
    <?php for ($i = 0; $i < 5; $i++): ?>
        Despesa <?= $i + 1 ?> (R$): <input type="number" step="0.01" name="despesas[]"><br>
    <?php endfor; ?>
    <button type="submit">Calcular Média</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['despesas'])) {
    $despesas = array_filter($_POST['despesas'], function($valor) {
        return $valor !== '';
    });

    if (!empty($despesas)) {
        $soma = array_sum($despesas);
        $quantidade = count($despesas);
        $media = $soma / $quantidade;

        echo "<h3>Despesas Informadas:</h3><ul>";
        foreach ($despesas as $valor) {
            echo "<li>R$ " . number_format($valor, 2, ',', '.') . "</li>";
        }
        echo "</ul>";

        echo "<p><strong>Média das despesas:</strong> R$ " . number_format($media, 2, ',', '.') . "</p>";
    } else {
        echo "<p>Preencha pelo menos uma despesa válida.</p>";
    }
}
?>
