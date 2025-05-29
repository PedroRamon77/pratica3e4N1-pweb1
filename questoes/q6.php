<?php
/*
6. Cálculo de orçamento:
• Declare duas variáveis: custoMaterial e custoMaoDeObra.
• Calcule e exiba o custo total.
*/
$custoMaterial = 150.50;
$custoMaoDeObra = 100.25;
$custoTotal = $custoMaterial + $custoMaoDeObra;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 6</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Cálculo de Orçamento</h1>

<p>Custo de Material: <?php echo $custoMaterial; ?></p>
<p>Custo de Mão de Obra: <?php echo $custoMaoDeObra; ?></p>
<p>Custo Total: <?php echo $custoTotal; ?></p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
