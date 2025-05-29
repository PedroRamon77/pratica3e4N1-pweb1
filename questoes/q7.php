<?php
/*
7. Endereço de entrega:
• Crie variáveis para rua e número.
• Exiba o endereço completo.
*/
$rua = "Rua Alameda José Quintino";
$numero = 300;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 7</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Endereço de Entrega</h1>

<p>Endereço: <?php echo $rua . ", numero: " . $numero; ?></p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
