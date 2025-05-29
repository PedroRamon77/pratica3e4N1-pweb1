<?php
/*
22. Itens pares em lista: Mostrar apenas os n´umeros pares de uma sequˆencia de 2 a
20, como se fossem identificadores de produtos.
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 22</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Itens pares em lista:</h1>

<?php 
    for ($i = 2; $i <= 20; $i += 2) {
        echo "Produto ID: $i<br>";
    }
?>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
