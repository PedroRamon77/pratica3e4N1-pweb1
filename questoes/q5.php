<?php
/*
5. Preço de venda e tipo de dado:
• Defina o preço unitário de um item.
• Use var_dump() ou gettype() para exibir o tipo da variável.
*/
$precoUnitario = 9.99;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 5</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Preço de Venda</h1>

<p>Preço unitário: <?php echo $precoUnitario; ?></p>
<p>Tipo da variável: <?php var_dump($precoUnitario); ?></p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
