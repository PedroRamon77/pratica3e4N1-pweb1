<?php
/*
39. C´alculo de ´area de terreno: Desenvolver uma fun¸c˜ao que calcule e retorne a ´area
de um terreno retangular, dados seus lados
*/
function calcularAreaTerreno($largura, $comprimento) {
    return $largura * $comprimento;
}

$largura = 10;
$comprimento = 50;

$area = calcularAreaTerreno($largura, $comprimento);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área do Terreno</title>
</head>
<body>

<h1>Cálculo da Área do Terreno</h1>

<p>Largura: <?php echo $largura; ?> metros</p>
<p>Comprimento: <?php echo $comprimento; ?> metros</p>
<p>Área do terreno: <?php echo $area; ?> metros quadrados</p>

<br>
<a href="../index.php">Voltar para o Menu</a>

</body>
</html>
