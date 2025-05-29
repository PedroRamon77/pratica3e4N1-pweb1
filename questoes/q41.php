<?php
/*
41. T´ıtulo dinˆamico de p´agina: Em uma p´agina web (HTML), defina o t´ıtulo da
p´agina usando uma vari´avel PHP para que possa ser facilmente alterado
*/

$tituloPagina = "Página Dinâmica - Exemplo";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo $tituloPagina; ?></title>
</head>
<body>

<h1><?php echo $tituloPagina; ?></h1>

<p>Este é um exemplo de página com título dinâmico definido por uma variável PHP.</p>

<br>
<a href="../index.php">Voltar para o Menu</a>

</body>
</html>
