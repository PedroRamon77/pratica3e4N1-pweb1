<form method="post">
    <h2>Cadastro de Caracteres Permitidos para Senha</h2>
    <?php for ($i = 0; $i < 8; $i++): ?>
        Caractere <?= $i + 1 ?>: <input type="text" name="caracteres[]" maxlength="1"><br>
    <?php endfor; ?>
    <button type="submit">Gerar String Base</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['caracteres'])) {
    $caracteresPermitidos = array_filter($_POST['caracteres'], function($c) {
        return $c !== '';
    });

    if (!empty($caracteresPermitidos)) {
        $stringBase = implode('', $caracteresPermitidos);
        echo "<h3>String base para geração de senha:</h3>";
        echo "<p>$stringBase</p>";
    } else {
        echo "<p>Por favor, informe pelo menos um caractere permitido.</p>";
    }
}
?>
