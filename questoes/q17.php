<form method="post">
    <h2>Digite uma frase para análise:</h2>
    <textarea name="texto" rows="3" cols="50" placeholder="Digite sua frase aqui..."></textarea><br>
    <button type="submit">Analisar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['texto'])) {
    $textoAnalise = trim($_POST['texto']);

    // Quebra a string em palavras, usando espaço como separador
    $palavras = explode(" ", $textoAnalise);
    $quantidade = count($palavras);

    echo "<h3>Palavras Encontradas:</h3><ul>";
    foreach ($palavras as $palavra) {
        echo "<li>$palavra</li>";
    }
    echo "</ul>";

    echo "<p><strong>Total de palavras:</strong> $quantidade</p>";
}
?>
