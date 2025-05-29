<?php
/*
28. Total de vendas:
Calcular o total de vendas de um mês, somando os valores diários do dia 1 ao dia 100.
Use números aleatórios para cada valor, dentro de um intervalo de R$ 50,00 a R$ 5.000,00.
*/
$totalVendas = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 28 - Total de vendas</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1> Relatório de Vendas dos 100 dias: </h1>

<?php

for ($dia = 1; $dia <= 100; $dia++) {
    $vendaDia = rand(5000, 500000) / 100;
    echo "Dia $dia: R$ " . number_format($vendaDia, 2, ',', '.') . "<br>";
    $totalVendas += $vendaDia;
}
echo "<br>Total de Vendas: R$ " . number_format($totalVendas, 2, ',', '.');

?>
<br>
<a href="../index.php">Voltar para as Questões</a>

