<form method="post">
    <h2>Cadastro de Categorias de Produtos</h2>
    <?php for ($i = 0; $i < 5; $i++): ?>
        Categoria <?= $i + 1 ?>: <input type="text" name="categorias[]"><br>
    <?php endfor; ?>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['categorias'])) {
    $categorias = array_filter($_POST['categorias'], function($item) {
        return !empty(trim($item));
    });

    echo "<h3>Ordem Alfabética:</h3><ul>";
    $ordemAlfabetica = $categorias;
    sort($ordemAlfabetica);
    foreach ($ordemAlfabetica as $cat) {
        echo "<li>$cat</li>";
    }
    echo "</ul>";

    echo "<h3>Ordem Alfabética Inversa:</h3><ul>";
    $ordemInversa = $categorias;
    rsort($ordemInversa);
    foreach ($ordemInversa as $cat) {
        echo "<li>$cat</li>";
    }
    echo "</ul>";
}
?>
