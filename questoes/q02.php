<form method="post">
    <h2>Boletim Escolar</h2>
    <label>Português: <input type="number" step="0.1" name="notas[Português]"></label><br>
    <label>Matemática: <input type="number" step="0.1" name="notas[Matemática]"></label><br>
    <label>História: <input type="number" step="0.1" name="notas[História]"></label><br>
    <label>Geografia: <input type="number" step="0.1" name="notas[Geografia]"></label><br>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['notas'])) {
    $boletim = $_POST['notas'];

    foreach ($boletim as $disciplina => $nota) {
        $status = ($nota >= 7) ? "Aprovado" : "Reprovado";
        echo "<p>$disciplina: $nota - $status</p>";
    }
}
?>


