<?php
/*
23. Preparando para lan¸camento: Exibir uma contagem regressiva de 5 a 1 antes de um "lan¸camento". Semelhante a anterior, mas juntanto texto e n´umero e
decrescente.
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 23</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Preparando para Lançamento...</h1>

<?php 
    for ($i = 5; $i >= 1; $i--) {
        echo "Contagem regressiva: <br> $i...<br>";
    }
?>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
