<?php
/*
29. Ciclo de produção:
Simular um ciclo de produção que se repete enquanto a quantidade produzida for menor que 5.
A cada ciclo, registrar e exibir a quantidade atual. Simular com array.
*/
$producao = [];
$quantidade = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Questão 29 - Ciclo de producao </title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1> Ciclo de producao: </h1>

<?php
while ($quantidade < 5) {
    $quantidade++;
    $producao[] = "Ciclo $quantidade concluído";
}

foreach ($producao as $registro) {
    echo $registro . "<br>";
}

echo "<br>Produção Finalizada com " . $quantidade . " ciclos.";
?>

<br>
<a href="../index.php">Voltar para as Questões</a>
