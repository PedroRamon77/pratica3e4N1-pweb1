<form method="post">
    <h2>Cadastro de Produtos e Preços</h2>
    <?php for ($i = 0; $i < 5; $i++): ?>
        Produto <?= $i + 1 ?>: 
        <input type="text" name="nomes[]">
        Preço: 
        <input type="number" step="0.01" name="precos[]"><br>
    <?php endfor; ?>
    <button type="submit">Ordenar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nomes']) && !empty($_POST['precos'])) {
    $nomes = $_POST['nomes'];
    $precos = $_POST['precos'];
    $precosProdutos = [];

    for ($i = 0; $i < count($nomes); $i++) {
        $nome = trim($nomes[$i]);
        $preco = floatval($precos[$i]);

        if (!empty($nome)) {
            $precosProdutos[$nome] = $preco;
        }
    }

    asort($precosProdutos);

    echo "<h3>Produtos ordenados por preço (crescente):</h3><ul>";
    foreach ($precosProdutos as $produto => $valor) {
        echo "<li>$produto - R$ " . number_format($valor, 2, ',', '.') . "</li>";
    }
    echo "</ul>";
}
?>
