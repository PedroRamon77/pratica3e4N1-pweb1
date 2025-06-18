<form method="post">
    <h2>Cadastro de Cartas do Baralho</h2>
    <?php for ($i = 0; $i < 5; $i++): ?>
        Carta <?= $i + 1 ?>: <input type="text" name="cartas[]"><br>
    <?php endfor; ?>
    <button type="submit">Embaralhar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['cartas'])) {
    $cartas = array_filter($_POST['cartas'], function($carta) {
        return !empty(trim($carta));
    });

    if (!empty($cartas)) {
        echo "<h3>Baralho antes do embaralhamento:</h3><ul>";
        foreach ($cartas as $carta) {
            echo "<li>$carta</li>";
        }
        echo "</ul>";

        shuffle($cartas);

        echo "<h3>Baralho após o embaralhamento:</h3><ul>";
        foreach ($cartas as $carta) {
            echo "<li>$carta</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Por favor, cadastre pelo menos uma carta.</p>";
    }
}
?>
