<?php
$produtos = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for ($i = 0; $i < count($_POST['nome']); $i++) {
        $nome = $_POST['nome'][$i];
        $sku = $_POST['sku'][$i];

        if (!empty($nome) && !empty($sku)) {
            $produtos[] = ["nome" => $nome, "sku" => $sku];
        }
    }
}
?>

<form method="post">
    <h2>Cadastro de Produtos</h2>
    <?php for ($i = 0; $i < 5; $i++): ?>
        <fieldset>
            <legend>Produto <?= $i + 1 ?></legend>
            Nome: <input type="text" name="nome[]"><br>
            SKU: <input type="text" name="sku[]"><br>
        </fieldset>
    <?php endfor; ?>
    <button type="submit">Cadastrar</button>
</form>

<?php if (!empty($produtos)): ?>
    <h3>Produtos Cadastrados:</h3>
    <ul>
        <?php foreach ($produtos as $p): ?>
            <li>Produto: <?= $p['nome'] ?> - SKU: <?= $p['sku'] ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
