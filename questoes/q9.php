<?php
/*
9. Valor de π (Pi):
• Declare uma constante ou variavel com valor de Pi.
• Caso decida usar constante, use o seguinte padrao:
• define(“FOO”, “algumacoisa”);
• Exiba o valor com 4 casas decimais.
*/
$pi = 3.14159265358979323846;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 9</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Valor de Pi</h1>

<p>Valor de π: <?php echo number_format($pi, 4); ?></p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
