<?php
/*
34. M´edia de notas: Criar uma fun¸c˜ao que receba um conjunto de notas de um aluno
e calcule a m´edia final, retornando esse valor.
*/
function calcularMedia($notas) {
    $soma = 0;
    $total = count($notas);
    foreach ($notas as $nota) {
        $soma += $nota;
    }
    return $total > 0 ? $soma / $total : 0;
}

$notasAluno = [7.5, 8.0, 9.0, 6.5];

$mediaFinal = calcularMedia($notasAluno);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Média de Notas</title>
</head>
<body>

<h1>Média de Notas do Aluno</h1>

<p>Notas: <?php echo implode(", ", $notasAluno); ?></p>
<p>Média final: <?php echo number_format($mediaFinal, 2, ',', '.'); ?></p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
