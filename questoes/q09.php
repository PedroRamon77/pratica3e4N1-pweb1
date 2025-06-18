<form method="post">
    <h2>Cadastro de IDs das Fontes A e B</h2>

    <h3>IDs da Fonte A:</h3>
    <?php for ($i = 0; $i < 3; $i++): ?>
        ID <?= $i + 1 ?>: <input type="number" name="fonteA[]"><br>
    <?php endfor; ?>

    <h3>IDs da Fonte B:</h3>
    <?php for ($i = 0; $i < 3; $i++): ?>
        ID <?= $i + 1 ?>: <input type="number" name="fonteB[]"><br>
    <?php endfor; ?>

    <button type="submit">Consolidar IDs</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idsFonteA = array_filter($_POST['fonteA'], function($id) {
        return $id !== '';
    });

    $idsFonteB = array_filter($_POST['fonteB'], function($id) {
        return $id !== '';
    });

    $todosIds = array_merge($idsFonteA, $idsFonteB);

    $todosIdsUnicos = array_unique($todosIds);

    echo "<h3>Todos os IDs (sem duplicatas):</h3><ul>";
    foreach ($todosIdsUnicos as $id) {
        echo "<li>$id</li>";
    }
    echo "</ul>";
}
?>
