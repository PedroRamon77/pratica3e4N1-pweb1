<?php
/*
21. Contagem regressiva simples: Exibir uma contagem de 1 a 10 para simular a
ordem de uma lista. Por estar no lado do servidor, essa contagem n˜ao ser´a interativa
[ainda], mostre apenas os n´umeros em ordem crescente. Use a criatividade para
parecer uma contagem regressiva.
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 21</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Contagem de 1 a 10</h1>

<?php 
    for ($i = 1; $i <= 10; $i++) {
        echo $i , "... ";
    } 
?>
<br>
<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
