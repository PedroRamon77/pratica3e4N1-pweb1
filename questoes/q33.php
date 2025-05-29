<?php
/*
33. Cálculo de custo total: Implementar uma função que calcule e retorne o custo total de vários itens,
recebendo o preço unitário e a quantidade. O resultado deve ser usado em um cálculo posterior.
*/

function calcularCustoTotal($precoUnitario, $quantidade) {
    return $precoUnitario * $quantidade;
}

$precoUnitario = 10.45;
$quantidade = 4;

$custoTotal = calcularCustoTotal($precoUnitario, $quantidade);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Custo Total</title>
</head>
<body>

<h1>Cálculo de Custo Total</h1>

<p>Preço unitário: R$ <?php echo number_format($precoUnitario, 2, ',', '.'); ?></p>
<p>Quantidade: <?php echo $quantidade; ?></p>
<p><strong>Custo total: R$ <?php echo number_format($custoTotal, 2, ',', '.'); ?></strong></p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
