<?php
/*
8. Mudança de categoria:
• Defina uma variável com código alfanumérico.
• Atualize para um número e exiba antes e depois.
*/
$categoria = "PROP-10";

$antes = $categoria;

$categoria = 1000;

$depois = $categoria;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 8</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Mudança de Categoria</h1>

<p>Antes: <?php echo $antes; ?></p>
<p>Depois: <?php echo $depois; ?></p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
