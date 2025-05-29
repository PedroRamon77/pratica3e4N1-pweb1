<?php
/*
35. Valida¸c˜ao de C´odigo: Desenvolver uma fun¸c˜ao que verifique se um c´odigo num´erico
´e par ou ´ımpar, retornando verdadeiro ou falso.
*/
function isPar($codigo) {
    return $codigo % 2 === 0;
}

$codigo = 17441527;

if ($codigo % 2 == 0) {
    $parOuImpar = "Par";
} else {
    $parOuImpar = "Ímpar";
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Validação de Código</title>
</head>
<body>

<h1>Validação de Código Numérico</h1>

<p>O código <?php echo $codigo; ?></strong> é: <?php echo $parOuImpar; ?></p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
