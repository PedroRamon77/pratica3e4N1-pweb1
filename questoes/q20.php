<form method="post">
    <h2>Cadastro Inicial do Inventário</h2>
    <label>Quantidade de Notebook: <input type="number" name="inventario[notebook]" value="20"></label><br>
    <label>Quantidade de Mouse: <input type="number" name="inventario[mouse]" value="50"></label><br>
    <label>Quantidade de Teclado: <input type="number" name="inventario[teclado]" value="30"></label><br>
    <button type="submit">Atualizar Inventário</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['inventario'])) {
    $inventario = [];

    foreach ($_POST['inventario'] as $produto => $quantidade) {
        $inventario[$produto] = intval($quantidade);
    }

    if (!array_key_exists('monitor', $inventario)) {
        $inventario['monitor'] = 15;
    }

    if (array_key_exists('notebook', $inventario)) {
        $inventario['notebook'] += 5;
    }

    echo "<h3>Inventário Final:</h3><ul>";
    foreach ($inventario as $produto => $quantidade) {
        echo "<li>$produto: $quantidade unidades</li>";
    }
    echo "</ul>";
}
?>
