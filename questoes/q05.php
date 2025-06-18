<form method="post">
    <h2>Espécies Observadas</h2>
    <?php for ($i = 0; $i < 6; $i++): ?>
        Espécie <?= $i + 1 ?>: <input type="text" name="especies[]"><br>
    <?php endfor; ?>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $especies = $_POST['especies'];
    $existePardal = in_array("Pardal", $especies);
    $especiesUnicas = array_unique($especies);

    echo $existePardal ? "<p>Pardal já foi registrado.</p>" : "<p>Pardal ainda não foi registrado.</p>";

    echo "<h3>Espécies únicas:</h3><ul>";
    foreach ($especiesUnicas as $esp) {
        echo "<li>$esp</li>";
    }
    echo "</ul>";
}
?>