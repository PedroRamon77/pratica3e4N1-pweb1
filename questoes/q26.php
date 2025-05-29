<?php
/*
26. Entrada de dados repetitiva:
Simular uma entrada de dados onde o programa continua "pedindo" informações
até que um valor específico (0) seja "digitado" pelo usuário.
Use um array/vetor para simular as entradas.
Implemente usando do..while.
*/
$entradas = [5, 12, 8, 15, 0, 3, 7];

$indice = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 26 - Entrada Repetitiva</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Simulação de Entrada Repetitiva</h1>

<?php
do {
    $valor = $entradas[$indice];
    echo "Valor: $valor<br>";
    $indice++;
} while ($valor != 0 && $indice < count($entradas));

echo "<br> Programa encerrado";
?>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
