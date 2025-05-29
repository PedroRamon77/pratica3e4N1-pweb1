<?php
/*
38. Formata¸c˜ao de pre¸cos: Implementar uma fun¸c˜ao que receba um valor monet´ario
e o retorne formatado corretamente para exibi¸c˜ao (ex: R$ 1.234,56).
*/

function formatarPreco($valor) {
    return "R$ " . number_format($valor, 2, ',', '.');
}

$valor = 1234.56;
$precoFormatado = formatarPreco($valor);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formatação de Preço</title>
</head>
<body>

<h1>Formatação de Preço</h1>

<p>Valor formatado: <?php echo $precoFormatado; ?></p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
