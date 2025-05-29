<?php
/*
Arquivo principal que inclui helpers.php para usar funções utilitárias.
*/
include 'pastaQ45/helpers.php';

$notas = [7.5, 8.2, 9.5];
$media = calcularMedia($notas);

$preco = 1234.56;
$precoFormatado = formatarPreco($preco);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exemplo Biblioteca de Funções</title>
</head>
<body>

<h1>Exemplo Biblioteca de Funções</h1>

<p>Média das notas: <?php echo $media; ?></p>
<p>Preço formatado: <?php echo $precoFormatado; ?></p>

<br>
<a href="../index.php">Voltar para o Menu</a>
</body>
</html>
