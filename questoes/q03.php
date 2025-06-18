<form method="post">
    <h2>Gestão de Estoque de Livros</h2>
    <?php for ($i = 0; $i < 3; $i++): ?>
        Livro <?= $i + 1 ?>: <input type="text" name="livros[]"><br>
    <?php endfor; ?>
    Novo Livro (entrada): <input type="text" name="novo"><br>
    <button type="submit">Atualizar Estoque</button>
</form>

<?php
$livros = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $livros = $_POST['livros'];
    $novoLivro = $_POST['novo'];

    if (!empty($novoLivro)) {
        array_push($livros, $novoLivro);
    }

    if (count($livros) >= 3) {
        unset($livros[2]);
        $livros = array_values($livros);
    }

    echo "<h3>Estoque Final:</h3><ul>";
    foreach ($livros as $livro) {
        echo "<li>$livro</li>";
    }
    echo "</ul>";
}
?>

